<?php
 $template = <<<XYZ
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>AStudio | coming soon</title>
    </head>
    <body>
      <div
        style="
          width: 100%;
          height: 100%;
          position: absolute;
          top: 0;
          left: 0;
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
        "
      >
        <h1 style="text-align: center">AStudio</h1>
        <p style="text-align: center">COMING SOON</p>
      </div>
    </body>
  </html>
  XYZ; 

  echo $template;
?>