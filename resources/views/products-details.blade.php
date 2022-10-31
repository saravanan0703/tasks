<!DOCTPE html>
<html>
<head>
<title>View Student Records</title>
</head>
<body style="
    display: flex;
    justify-content: center;
">
<div class="card" style="width: 50%;">
  <div class="card-body" style="background: #edebe6;font-size: 28px;line-height: 50px;text-align: center;">
    <h2 class="card-title">{{ $products->id }} Products Details</h2>
    <b>Id : </b>{{ $products->id }}
    <br />
    <b>Name :</b> {{ $products->name }}
    <br />
    <b>Price : </b>{{ $products->price }}
    <br />
    <b>Description : </b>{{ $products->description }}
  </div>
</div>
</body>
</html>