Step1:Create database ilink <br>
Step2:Run php artisan migrate:fresh command to migtae all the tables to your databse  <br>
Step3:Run php artisan db:seed command <br>
Step4:Navigate to app->databse->factories->categoryFactory.php <br>
Remove comment from line number 20 and 21 <br>
  // 'name' => "instagram", <br>
 // 'image'=>"instagram.png", <br>
and comment line number 22 and 23 <br>
 'name' => "facebook", <br>
'image'=>"facebook.png" <br><br>

Step5:Run php artisan db:seed command <br>
step6:Map your domain with localhost
<ul>
    <li>Go to C:\Windows\System32\drivers\etc</li>
    <l1>Open Hosts file with administrator</l1>
    <li>Add Line 127.0.0.1 YourDomain</li>
</ul><br>
step6:Run npm run dev command <br>
step7:Run php artisan serve command <br>
