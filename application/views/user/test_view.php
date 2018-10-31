

  <!-- include libraries BS -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.css" />
  <script src="http://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.js"></script> 

 

   

  <script type="text/javascript">
    $(function() {
      $('.summernote').summernote({
        height: 200
      });

      $('form').on('submit', function (e) {
        e.preventDefault();
        alert($('.summernote').summernote('code'));
        alert($('.summernote').val());
      });
    });
  </script>
</head>
<body>
<form action="#" novalidate>
  <div class="form-group">
    <label for="input">Text</label>
    <input type="text" class="form-input" id="input" value="Title">
  </div>
  <div class="form-group">
    <label for="contents">Contents</label>
    <textarea name="text" class="summernote" id="contents" title="Contents"></textarea>
  </div>
  <button type="submit" class="btn btn-default">submit</button>
</form>
</body>
</html>
