## ติดตั้ง
<h1>จะนำงานนี้ไปใช้ต้องทำการติดตั้ง laravel/ui และ Bootstrap ui ก่อน </h1>
<h5>อย่างแรกให้ทำการติดตั้ง Composer ก่อน สามารถไปโหลดได้ที่ https://getcomposer.org/download/</h5>
<h5>หลังจากนั้นให้ทำการ composer update เพื่อที่จะ genarate ไฟล์ venderมาเพื่อให้นันโปรเจคได้</h5>
<h5>หลังจากนั้นเปิด Command Line ในโปรเจคทำการพิม composer require laravel/ui เพื่อติดตั้ง laravel/ui</h5>
<h5>จากนั้นให้ใช้คำสั่ง php artisan ui bootstrap --auth เพื่อสร้างไฟล์ ui</h5>
<h5>จากนั้นทำการ npm install ถ้าใช้ไม่ได้ให้ทำการติดตั้ง nodeJs v.16.0.0 ขึ้นไป</h5>
<h5>หลังจากทำการinstall แล้ว ให้ทำการ npm run build เพื่อสร้าง vite แล้วหลังจากbuildเสร็จให้ทำการ npm run dev ต่อ</h5>
<h5>ให้ทำการสร้างตารางdatabase ชื่อ laravel แล้วทำการmigrateโดยคำสั่ง php artisan migrate</h5>
