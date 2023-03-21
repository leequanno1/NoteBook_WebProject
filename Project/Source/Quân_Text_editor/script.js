CKEDITOR.replace('editor', {
  language: 'en', // Ngôn ngữ của CKEditor
  toolbar: [
    {name: 'document', items: ['Source', '-', 'Save', 'NewPage', 'Preview', 'Print', '-', 'Templates']},
    {name: 'clipboard', items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo']},
    {name: 'editing', items: ['Find', 'Replace', '-', 'SelectAll']},
    '/',
    {name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat']},
    {name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote','-','JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock']},
    {name: 'links', items: ['Link', 'Unlink']},
    {name: 'insert', items: ['Image', 'Table', 'HorizontalRule', 'SpecialChar']},
    '/',
    {name: 'styles', items: ['Styles', 'Format', 'Font', 'FontSize']},
    {name: 'colors', items: ['TextColor', 'BGColor']},
    {name: 'tools', items: ['Maximize', 'ShowBlocks']}
  ], // Thanh công cụ CKEditor được tùy chỉnh
  height: '81vh' // Chiều cao của CKEditor
});

if (CKEDITOR.instances.editor.getData()){
  console.log(CKEDITOR.instances.editor.getData());
  CKEDITOR.instances.editor.setData(CKEDITOR.instances.editor.getData() + '<p>This is the editor data.</p>' );
}
