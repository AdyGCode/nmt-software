<?php

namespace Database\Seeders;

use App\Models\FileType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FileTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fileTypes = [
            [
                'id'=>1,
                'file_extension' => "unknown",
                'description' => " Unknown file type",
                'mime_type' => "unknown/unknown"
            ],
            [
                'id'=>101,
                'file_extension' => "aac",
                'description' => "AAC audio",
                'mime_type' => "audio/aac"
            ],
            [
                'file_extension' => "abw",
                'description' => "AbiWord document",
                'mime_type' => "application/x-abiword"
            ],
            [
                'file_extension' => "arc",
                'description' => "Archive document (multiple files embedded)",
                'mime_type' => "application/x-freearc"
            ],
            [
                'file_extension' => "avif",
                'description' => "AVIF image",
                'mime_type' => "image/avif"
            ],
            [
                'file_extension' => "avi",
                'description' => "AVI: Audio Video Interleave",
                'mime_type' => "video/x-msvideo"
            ],
            [
                'file_extension' => "azw",
                'description' => "Amazon Kindle eBook format",
                'mime_type' => "application/vnd.amazon.ebook"
            ],
            [
                'file_extension' => "bin",
                'description' => "Any kind of binary data",
                'mime_type' => "application/octet-stream"
            ],
            [
                'file_extension' => "exe",
                'description' => "Windows executable file",
                'mime_type' => "application/octet-stream"
            ],
            [
                'file_extension' => "msi",
                'description' => "Windows executable installer file",
                'mime_type' => "application/octet-stream"
            ],
            [
                'file_extension' => "bmp",
                'description' => "Windows OS/2 Bitmap Graphics",
                'mime_type' => "image/bmp"
            ],
            [
                'file_extension' => "bz",
                'description' => "BZip archive",
                'mime_type' => "application/x-bzip"
            ],
            [
                'file_extension' => "bz2",
                'description' => "BZip2 archive",
                'mime_type' => "application/x-bzip2"
            ],
            [
                'file_extension' => "cda",
                'description' => "CD audio",
                'mime_type' => "application/x-cdf"
            ],
            [
                'file_extension' => "csh",
                'description' => "C-Shell script",
                'mime_type' => "application/x-csh"
            ],
            [
                'file_extension' => "css",
                'description' => "Cascading Style Sheets (CSS)",
                'mime_type' => "text/css"
            ],
            [
                'file_extension' => "csv",
                'description' => "Comma-separated values (CSV)",
                'mime_type' => "text/csv"
            ],
            [
                'file_extension' => "doc",
                'description' => "Microsoft Word",
                'mime_type' => "application/msword"
            ],
            [
                'file_extension' => "docx",
                'description' => "Microsoft Word (OpenXML)",
                'mime_type' => "application/vnd.openxmlformats-officedocument.wordprocessingml.document"
            ],
            [
                'file_extension' => "eot",
                'description' => "MS Embedded OpenType fonts",
                'mime_type' => "application/vnd.ms-fontobject"
            ],
            [
                'file_extension' => "epub",
                'description' => "Electronic publication (EPUB)",
                'mime_type' => "application/epub+zip"
            ],
            [
                'file_extension' => "gz",
                'description' => "GZip Compressed Archive",
                'mime_type' => "application/gzip"
            ],
            [
                'file_extension' => "gif",
                'description' => "Graphics Interchange Format (GIF)",
                'mime_type' => "image/gif"
            ],
            [
                'file_extension' => "htm .html",
                'description' => "HyperText Markup Language (HTML)",
                'mime_type' => "text/html"
            ],
            [
                'file_extension' => "ico",
                'description' => "Icon format",
                'mime_type' => "image/vnd.microsoft.icon"
            ],
            [
                'file_extension' => "ics",
                'description' => "iCalendar format",
                'mime_type' => "text/calendar"
            ],
            [
                'file_extension' => "jar",
                'description' => "Java Archive (JAR)",
                'mime_type' => "application/java-archive"
            ],
            [
                'file_extension' => "jpeg .jpg",
                'description' => "JPEG images",
                'mime_type' => "image/jpeg"
            ],
            [
                'file_extension' => "js",
                'description' => "JavaScript",
                'mime_type' => "text/javascript"
            ],
            [
                'file_extension' => "json",
                'description' => "JSON format",
                'mime_type' => "application/json"
            ],
            [
                'file_extension' => "jsonld",
                'description' => "JSON-LD format",
                'mime_type' => "application/ld+json"
            ],
            [
                'file_extension' => "mid .midi",
                'description' => "Musical Instrument Digital Interface (MIDI)",
                'mime_type' => "audio/midi audio/x-midi"
            ],
            [
                'file_extension' => "mjs",
                'description' => "JavaScript module",
                'mime_type' => "text/javascript"
            ],
            [
                'file_extension' => "mp3",
                'description' => "MP3 audio",
                'mime_type' => "audio/mpeg"
            ],
            [
                'file_extension' => "mp4",
                'description' => "MP4 video",
                'mime_type' => "video/mp4"
            ],
            [
                'file_extension' => "mpeg",
                'description' => "MPEG Video",
                'mime_type' => "video/mpeg"
            ],
            [
                'file_extension' => "mpkg",
                'description' => "Apple Installer Package",
                'mime_type' => "application/vnd.apple.installer+xml"
            ],
            [
                'file_extension' => "odp",
                'description' => "OpenDocument presentation document",
                'mime_type' => "application/vnd.oasis.opendocument.presentation"
            ],
            [
                'file_extension' => "ods",
                'description' => "OpenDocument spreadsheet document",
                'mime_type' => "application/vnd.oasis.opendocument.spreadsheet"
            ],
            [
                'file_extension' => "odt",
                'description' => "OpenDocument text document",
                'mime_type' => "application/vnd.oasis.opendocument.text"
            ],
            [
                'file_extension' => "oga",
                'description' => "OGG audio",
                'mime_type' => "audio/ogg"
            ],
            [
                'file_extension' => "ogv",
                'description' => "OGG video",
                'mime_type' => "video/ogg"
            ],
            [
                'file_extension' => "ogx",
                'description' => "OGG",
                'mime_type' => "application/ogg"
            ],
            [
                'file_extension' => "opus",
                'description' => "Opus audio",
                'mime_type' => "audio/opus"
            ],
            [
                'file_extension' => "otf",
                'description' => "OpenType font",
                'mime_type' => "font/otf"
            ],
            [
                'file_extension' => "png",
                'description' => "Portable Network Graphics",
                'mime_type' => "image/png"
            ],
            [
                'file_extension' => "pdf",
                'description' => "Adobe Portable Document Format (PDF)",
                'mime_type' => "application/pdf"
            ],
            [
                'file_extension' => "php",
                'description' => "PHP: Hypertext Preprocessor",
                'mime_type' => "application/x-httpd-php"
            ],
            [
                'file_extension' => "ppt",
                'description' => "Microsoft PowerPoint",
                'mime_type' => "application/vnd.ms-powerpoint"
            ],
            [
                'file_extension' => "pptx",
                'description' => "Microsoft PowerPoint (OpenXML)",
                'mime_type' => "application/vnd.openxmlformats-officedocument.presentationml.presentation"
            ],
            [
                'file_extension' => "rar",
                'description' => "RAR archive",
                'mime_type' => "application/vnd.rar"
            ],
            [
                'file_extension' => "rtf",
                'description' => "Rich Text Format (RTF)",
                'mime_type' => "application/rtf"
            ],
            [
                'file_extension' => "sh",
                'description' => "Bourne shell script",
                'mime_type' => "application/x-sh"
            ],
            [
                'file_extension' => "svg",
                'description' => "Scalable Vector Graphics (SVG)",
                'mime_type' => "image/svg+xml"
            ],
            [
                'file_extension' => "swf",
                'description' => "Small web format (SWF) or Adobe Flash document",
                'mime_type' => "application/x-shockwave-flash"
            ],
            [
                'file_extension' => "tar",
                'description' => "Tape Archive (TAR)",
                'mime_type' => "application/x-tar"
            ],
            [
                'file_extension' => "tif .tiff",
                'description' => "Tagged Image File Format (TIFF)",
                'mime_type' => "image/tiff"
            ],
            [
                'file_extension' => "ts",
                'description' => "MPEG transport stream",
                'mime_type' => "video/mp2t"
            ],
            [
                'file_extension' => "ttf",
                'description' => "TrueType Font",
                'mime_type' => "font/ttf"
            ],
            [
                'file_extension' => "txt",
                'description' => "Text, (generally ASCII or ISO 8859-n)",
                'mime_type' => "text/plain"
            ],
            [
                'file_extension' => "vsd",
                'description' => "Microsoft Visio",
                'mime_type' => "application/vnd.visio"
            ],
            [
                'file_extension' => "wav",
                'description' => "Waveform Audio Format",
                'mime_type' => "audio/wav"
            ],
            [
                'file_extension' => "weba",
                'description' => "WEBM audio",
                'mime_type' => "audio/webm"
            ],
            [
                'file_extension' => "webm",
                'description' => "WEBM video",
                'mime_type' => "video/webm"
            ],
            [
                'file_extension' => "webp",
                'description' => "WEBP image",
                'mime_type' => "image/webp"
            ],
            [
                'file_extension' => "woff",
                'description' => "Web Open Font Format (WOFF)",
                'mime_type' => "font/woff"
            ],
            [
                'file_extension' => "woff2",
                'description' => "Web Open Font Format (WOFF)",
                'mime_type' => "font/woff2"
            ],
            [
                'file_extension' => "xhtml",
                'description' => "XHTML",
                'mime_type' => "application/xhtml+xml"
            ],
            [
                'file_extension' => "xls",
                'description' => "Microsoft Excel",
                'mime_type' => "application/vnd.ms-excel"
            ],
            [
                'file_extension' => "xlsx",
                'description' => "Microsoft Excel (OpenXML)",
                'mime_type' => "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"
            ],
            [
                'file_extension' => "xml",
                'description' => "XML",
                'mime_type' => "application/xml"
            ],
            [
                'file_extension' => "xul",
                'description' => "XUL",
                'mime_type' => "application/vnd.mozilla.xul+xml"
            ],
            [
                'file_extension' => "zip",
                'description' => "ZIP archive",
                'mime_type' => "application/zip"
            ],
            [
                'file_extension' => "3gp",
                'description' => "3GPP video container",
                'mime_type' => "video/3gpp"
            ],
            [
                'file_extension' => "3gp",
                'description' => "3GPP video container",
                'mime_type' => "audio/3gpp"
            ],
            [
                'file_extension' => "3g2",
                'description' => "3GPP2 audio container",
                'mime_type' => "audio/3gpp2"
            ],
            [
                'file_extension' => "3g2",
                'description' => "3GPP2 video container",
                'mime_type' => "video/3gpp2"
            ],
            [
                'file_extension' => "7z",
                'description' => "7-zip archive",
                'mime_type' => "application/x-7z-compressed"
            ],

        ];

        foreach($fileTypes as $fileType){
            FileType::create($fileType);
        }

        $countItems = count($fileTypes);
        $this->command->getOutput()->writeln("<info>            Added {$countItems} file & mime types.");
    }
}
