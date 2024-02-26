# Specify the directory containing HEIC files
$directory = "."

# Get all HEIC files in the directory
$heicFiles = Get-ChildItem -Path $directory -Filter *.heic

foreach ($file in $heicFiles) {
    # Construct the new file name with .jpg extension
    $newFileName = [System.IO.Path]::ChangeExtension($file.FullName, '.jpg')

    # Convert the file using ImageMagick
    magick convert $file.FullName $newFileName
}
