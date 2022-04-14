<!DOCTYPE html>
<html>

<head>
  <title>Change URL without reloading page using ajax & PHP</title>
  <style type="text/css" href="style.css"></style>
</head>

<body>
  <?php
  include('sections/header.php');
  ?>
  <div class="main-content" id="<?php echo empty($_GET['page']) ? 'pageContent' : ''; ?>">
    <section class="text-gray-600 body-font">
      <div class="container px-5 py-24 mx-auto">
        <div class="text-center mb-20">
          <h1 class="sm:text-3xl text-2xl font-medium text-center title-font text-gray-900 mb-4">Chungu Developers</h1>
        </div>
        <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
          <?php
          $skills  = ["PHP", "Laravel", "Linux", "Tailwind CSS", "Javascript", "HTML & CSS", "Batch", "Bash"];
          ?>
          <?php foreach ($skills as $skill) : ?>
            <div class="p-2 sm:w-1/2 w-full">
              <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-blue-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                  <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                  <path d="M22 4L12 14.01l-3-3"></path>
                </svg>
                <span class="title-font font-medium"><?= $skill; ?></span>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <button class="flex mx-auto mt-16 text-white bg-blue-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg">Get Qoute</button>
      </div>
    </section>

  </div>
  <?php
  include('sections/footer.php');
  ?>
</body>

</html>