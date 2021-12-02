<?php
class File {
    private int $size;
}
class Image extends File {
    private int $width;
    private int $height;
}
class Audio extends File {
    private string $codec;
    private DateTime $duration;
}
class Text extends File {
    private int $fontSize;
}
class CompactaArquivo {
    public static function Comrar(File $file) {
        echo "RAR";
    }
    public static function Comzip(File $file) {
        echo "Zip";
    }
    public static function Comtar(File $file) {
        echo "TAR";
    }
}
?>