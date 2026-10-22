<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Add New Package</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <style>
    :root{
      --dark-green:#0f3d2e;
      --green:#145a42;
      --green-light:#e9f4f0;
      --border:#d7e3df;
      --text:#1f2933;
      --muted:#6b7280;
    }

    body{
      font-family:'Inter', sans-serif;
      margin:0;
      background:#f3f6f5;
      padding:30px;
      color:var(--text);
    }

    /* Dashboard Card */
    .form-box{
      max-width:900px;
      margin:auto;
      background:#ffffff;
      border-radius:14px;
      box-shadow:0 12px 35px rgba(0,0,0,.08);
      padding:35px;
      border-top:6px solid var(--dark-green);
    }

    h2{
      margin:0 0 30px;
      font-size:22px;
      font-weight:700;
      color:var(--dark-green);
      display:flex;
      align-items:center;
      gap:10px;
    }

    h2::before{
      content:"🗂️";
      font-size:20px;
    }

    label{
      font-size:14px;
      font-weight:600;
      color:#163c2c;
      margin-bottom:6px;
      display:block;
    }

    input[type="text"],
    input[type="file"],
    textarea{
      width:100%;
      padding:13px 14px;
      border-radius:8px;
      border:1px solid var(--border);
      font-size:14px;
      background:#fbfdfc;
      transition:.2s;
    }

    input:focus,
    textarea:focus{
      outline:none;
      border-color:var(--green);
      box-shadow:0 0 0 3px rgba(20,90,66,.12);
      background:#fff;
    }

    textarea{
      resize:vertical;
    }

    .note{
      font-size:12px;
      color:var(--muted);
      margin:6px 0 18px;
    }

    #image-preview{
      display:none;
      margin-top:12px;
      width:100%;
      max-height:300px;
      object-fit:cover;
      border-radius:10px;
      border:1px solid var(--border);
    }

    input[type="submit"]{
      width:100%;
      background:linear-gradient(135deg,var(--green),var(--dark-green));
      color:#fff;
      font-size:15px;
      font-weight:700;
      padding:15px;
      border:none;
      border-radius:10px;
      cursor:pointer;
      margin-top:10px;
      transition:.25s;
      letter-spacing:.3px;
    }

    input[type="submit"]:hover{
      transform:translateY(-1px);
      box-shadow:0 10px 25px rgba(20,90,66,.35);
    }

    @media(max-width:600px){
      body{padding:15px;}
      .form-box{padding:25px;}
      h2{font-size:19px;}
    }
    /* Action Buttons */
.actions{
  display:flex;
  flex-wrap:wrap;
  gap:12px;
  margin-bottom:30px;
}

.actions a{
  background:var(--green);
  color:#fff;
  padding:10px 16px;
  border-radius:8px;
  text-decoration:none;
  font-weight:600;
  font-size:14px;
  transition:.2s;
}

.actions a:hover{
  background:var(--dark-green);
}
  </style>
</head>

<body>
<div class="actions">
    <a href="add_package.php">+ Add Trekking Package</a>
    <a href="add_package_safari.php">+ Add Safari Package</a>
    <!--<a href="add_package_article.php">+ Add Article Page</a>-->
    <a href="list_packages.php">📋 List Packages</a>
  </div>
  <br>
  <a class="logout" href="logout.php">Logout</a>
  <div class="form-box">
    <h2>Add New Package (Trekking)</h2>

    <form method="post" enctype="multipart/form-data" action="process_package.php" onsubmit="return validateWordCount()">

      <label for="title">Page Link / Title</label>
      <input type="text" id="title" name="title" required maxlength="400" />

      <label for="meta_description">Meta Description</label>
      <input type="text" id="meta_description" name="meta_description" required maxlength="160" />
      <div class="note">Max 160 characters (SEO)</div>

      <label for="head1">Head 1</label>
      <input type="text" id="head1" name="head1" required maxlength="60" />
      <div class="note">Max 60 characters</div>

      <label for="description">Short Description</label>
      <textarea id="description" name="description" maxlength="280"></textarea>
      <div class="note">210–280 characters recommended</div>

      <label for="head2">Head 2</label>
      <input type="text" id="head2" name="head2" maxlength="80" />
      <div class="note">Optional subtitle</div>

      <label for="overview">General Overview</label>
      <textarea id="overview" name="overview" required maxlength="350"></textarea>
      <div class="note">Max 350 characters</div>

      <label for="itinerary">Itinerary / Article</label>
      <textarea id="itinerary" name="itinerary" required style="height:420px;"></textarea>
      <div class="note">Minimum 400 words recommended</div>

      <label for="image">Upload Image</label>
      <input type="file" id="image" name="image" accept="image/*" onchange="previewImage()" required />
      <img id="image-preview" src="" alt="Image Preview"/>

      <input type="submit" name="add_package" value="Save Package"/>
    </form>
  </div>

  <script>
    function previewImage(){
      var file=document.getElementById('image').files[0];
      var reader=new FileReader();
      reader.onload=function(e){
        var preview=document.getElementById('image-preview');
        preview.src=e.target.result;
        preview.style.display='block';
      };
      if(file){reader.readAsDataURL(file);}
    }
  </script>

</body>
</html>
