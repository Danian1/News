@extends('layout.head')
<div class="container">
  <FORM method="post" action="/insert">
  {{csrf_field()}}
    <div class="form-group row">
      <label for="link" class="col-sm-2 col-form-label">Link</label>
      <div class="col-md-6">
        <input type="text" class="form-control" id="link" name="link" placeholder="Link to the article" >
	  </div>
	  <div class="col-md-3">
		<button type="button" class="btn btn-primary" onclick="send()">Get info from link</button>
      </div>
    </div>
    <div class="form-group row">
      <label for="title" class="col-sm-2 col-form-label">Title</label>
      <div class="col-md-6">
        <input type="text" class="form-control" id="title" name="title" placeholder="Title" required>
      </div>
    </div>
	<div class="form-group row">
      <label for="source" class="col-sm-2 col-form-label">Source</label>
      <div class="col-md-6">
        <input type="text" class="form-control" id="source" name="source" placeholder="Source" required>
      </div>
    </div>
      <div class="form-group row">
          <label for="img" class="col-sm-2 col-form-label">Image</label>
          <div class="col-md-6">
              <input class="form-control" rows="5" id="img" name="img" placeholder="Image link" required>
          </div>
      </div>
	<div class="form-group row">
      <label for="desc" class="col-sm-2 col-form-label">Description</label>
      <div class="col-md-6">
         <textarea class="form-control" rows="5" id="desc" name="desc" placeholder="Description" required></textarea>
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <button type="submit" class="btn btn-success" name="save"> Save</button>
		<input type="reset" class="btn btn-info" name="reset" value="Reset"/>
      </div>
    </div>
  </form>
</div>
 <script>

    function send() {
        var link = "url="+document.getElementById('link').value;
        if (link != "") {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var result = JSON.parse(xhttp.responseText)
                    document.getElementById("title").value = result.titlu;
                    document.getElementById("desc").value = result.descriere;
                    document.getElementById("source").value = result.host;
                    document.getElementById("img").value = result.imglink;
                }
            };
            xhttp.open("POST", '\php/GetMetaTag.php?'+link, true);
            xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhttp.send(link);
        }
    }
 </script>