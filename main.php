<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <title>Forget Password</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light ">

<div class="container-fluid">
      <a class="navbar-brand text-white" href="#">Logo</a>

      <div class="container-md">
        <a class="navbar-brand text-white"  href="#">Home</a>
        <a class="navbar-brand text-white" href="#">About Us</a>
        <a class="navbar-brand text-white" href="#">News</a>
        <a class="navbar-brand text-white" href="#">Registration</a>

    </div>
    </div>
</nav>

<main class="main">

    <tr>
      <th> <h2 class="titl">Forgot Your Password ?</h2> </th>
    </tr>

    <tr>
      <th> <p class="info">Enter your Email below to receive your password reset instructions</p> </th>
    </tr>

    
    

    <form class="frgt-paswd">
  
    <div class="container">
    <label class="visually-hidden email" for="specificSizeInputName">Email : </label>
    <input type="text" class="form-control" id="specificSizeInputName" placeholder="Enter Registered Email ">
    </div>

    <div class="butn">
    <button type="submit" class="btn bg-warning ">Send</button>
    </div>

    </form>

    <div class="back">
      <img id="back-arrow" src="images/back.png" alt="">
    <a href="#" class="back-login warning">Back to Login Page</a>
    </div>

</main>

</body>
</html>
