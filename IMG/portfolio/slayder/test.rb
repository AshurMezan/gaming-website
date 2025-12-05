# rename_icons.rb

# 1. Определяем список расширений, которые считаются изображениями.
IMAGE_EXTENSIONS = [".png", ".svg", ".jpg", ".jpeg", ".gif", ".webp"]

# 2. Получаем все файлы в текущей директории.
# Dir.glob('*') ищет все файлы и папки в текущей директории.
# Затем мы отбираем только те, которые заканчиваются на нужные расширения.
image_files = Dir.glob('*').select do |file|
  # File.file?(file) проверяет, что это файл, а не директория.
  # File.extname(file).downcase проверяет расширение, приводя его к нижнему регистру.
  File.file?(file) && IMAGE_EXTENSIONS.include?(File.extname(file).downcase)
end

# Проверяем, найдены ли изображения
if image_files.empty?
  puts "В текущей директории не найдено изображений с расширениями: #{IMAGE_EXTENSIONS.join(', ')}."
  puts "Скрипт завершил работу."
  exit 0
end

# 3. Переименовываем файлы
counter = 1
image_files.each do |old_name|
  # Получаем расширение оригинального файла (например, ".png")
  extension = File.extname(old_name)
  
  # Создаем новое имя файла в формате "icon_X.расширение"
  new_name = "icon_#{counter}#{extension}"
  
  # Переименовываем файл
  begin
    File.rename(old_name, new_name)
    puts "Переименовано: '#{old_name}' -> '#{new_name}'"
    counter += 1
  rescue => e
    # Обработка возможных ошибок, например, если файл занят или нет прав
    puts "Ошибка при переименовании файла '#{old_name}': #{e.message}"
  end
end

# 4. Вывод финального сообщения
puts
puts "Скрипт завершил работу."
