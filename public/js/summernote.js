// var markupStr = $('#summernote').summernote('code');
$('#summernote').summernote({
    placeholder: 'Contenido de la noticia',
    tabsize: 1,
    lang: 'es-ES',
    minHeight: 200,
    maxHeight: null,
    focus: false,
    styleTags: [
    'p',
        { title: 'Blockquote', tag: 'blockquote', className: 'blockquote', value: 'blockquote' },
        'pre', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'
    ],
    toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        // ['fontname', ['fontname']],
        // ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        // ['insert', ['link', 'picture', 'video']],
        ['view', ['codeview', 'help']],
      ],
});






