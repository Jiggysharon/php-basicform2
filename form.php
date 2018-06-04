<!DOCTYPE html>
<html>
<head>
  <title> Sign Up! </title>
<link href="styles-main.css" rel="stylesheet">
</head>

<body>
  <div id="header"><img src="img/ph-header2.png" width="739"
    height="135"></div>
    <div id="topine"></div>
    <div id-"mainContent">

      <h1> Hello The Inside </h1>

      <form action="form-action.php method"="post" name-"signup" id="sighnup">
        <h2> Contact Info </h2>
        <p>
          <label for="name"> Name: </label>
          <input name="name" type="text" id-"name" size="60">
          <label for="email"> Email: </label>
          <input name="email" type="text" id="email" size="60">
        </p>
        <h2> Your Interest </h2>

        <p>
          Experience Level: <br>
          <label><input name="level" type="radio" id="expert" value="expert">
            Expert </label>

            <label><input name="level" type="radio" id="decent" value="decent">
              Decent</label>
            </p>
            <p>
              What do you read?
              <br>
              <label><input name="publications[]" type="checkbox"
                id="publications_drf" value="Buzzfeed"> Buzzfeed </label>

                <br><label><input name="publications[]" type="checkbox"
                  id="publications_elle" value="Reddit"> Reddit </label>
                </p>
