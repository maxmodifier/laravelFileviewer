<?php

namespace Vijay\DocumentPreview;

use Vijay\DocumentPreview\Readers\{
    DocReader, DocxReader,
    XlsReader, XlsxReader,
    PdfReader, ImageReader,
    AudioReader, VideoReader
};
use Vijay\DocumentPreview\Exceptions\FilePreviewException;

class FilePreview
{
    public function show(string $path)
    {
        $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));

        $reader = match ($ext) {
            'doc'  => new DocReader($path),
            'docx' => new DocxReader($path),
            'xls'  => new XlsReader($path),
            'xlsx' => new XlsxReader($path),
            'pdf'  => new PdfReader($path),

            'jpg','jpeg','png','gif','webp','svg' => new ImageReader($path),
            'mp3','wav','ogg' => new AudioReader($path),
            'mp4','mpeg','webm' => new VideoReader($path),

            default => throw new FilePreviewException("Unsupported file type: {$ext}")
        };

        return view('document-preview::preview', [
            'content' => $reader->toHtmlPreview()
        ]);
    }
}