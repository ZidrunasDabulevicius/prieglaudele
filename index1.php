<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
.header {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
  font-size: 35px;
}

/* Container for flexboxes */
.row {
  display: -webkit-flex;
  display: flex;
}

/* Create three equal columns that sits next to each other */
.column {
  -webkit-flex: 1;
  -ms-flex: 1;
  flex: 1;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Style the footer */
.footer {
  background-color: #f1f1f1;
  padding: 10px;
  text-align: center;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
  .row {
    -webkit-flex-direction: column;
    flex-direction: column;
  }
}
</style>
</head>
<body>

<div class="header">
  <h2><img src="https://clipartmag.com/images/cartoon-dog-paw-1.jpg" alt="Logo" style="width:100px">  Gyvūnų prieglauda</h2>


<button>Apie mus</button>
<button>Priglausk gyvūną</button>
<button>Noriu atiduoti augintinį</button>
<button>Prisijungti</button>
<button>Registruotis</button>

</div>


<div class="row">
  <div class="column" style="background-color:#aaa;">Katės</div>
  <div class="column" style="background-color:#bbb;">Šunys</div>
  <div class="column" style="background-color:#ddd;">Kiti</div>
</div>

<div class="footer">
  <p>2022 © KSU.lt, visos teisės saugomos</p>
</div>

</body>
</html>


