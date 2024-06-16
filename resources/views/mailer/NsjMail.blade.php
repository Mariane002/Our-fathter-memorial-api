<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
  </script>
</head>

<body>
  <div class="card m-5">
    <div class="p-5">
      <div class="mb-5">
        <h4>{{ $name ?? "N/A" }}</h4>
        <span>{{ $email ?? "N/A" }}</span><br>
        <span>{{ $contact ?? "N/A" }}</span>
      </div>


      <p class="messages">{{ $messages ?? "N/A" }}</p>


      <div class="footer mt-5">
        <h4 class="header">{{ $name ?? "N/A" }}</h4>
        <span class="subheader">{{ $company ?? "N/A" }}</span><br>
      </div>
    </div>
  </div>
</body>

<style>
.messages {
  text-align: justify;
}

.footer {
  text-align: end;
}

.footer .header {
  text-decoration: underline;
}
</style>

</html>