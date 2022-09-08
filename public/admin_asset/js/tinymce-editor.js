tinymce.init({
  selector: 'textarea#alertDescription',
  height: 300,
  menubar: false,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table paste code help wordcount', 'image'
  ],
  toolbar: 'undo redo | formatselect | ' +
    'bold italic forecolor backcolor | alignleft aligncenter ' +
    'alignright alignjustify | bullist numlist outdent indent | ' +
    'removeformat | help',
  content_css: '//www.tiny.cloud/css/codepen.min.css'
});
