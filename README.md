# vaccineregistration
## เงื่อนไขของระบบ
1.ห้ามลงทะเบียนโดยใช้เลขบัตรประชาชนซ้ำ <br />
2.ห้ามลงทะเบียนโดยใช้เบอร์โทรศัพท์ซ้ำ <br />
3.วันที่ต้องการฉีดวัคซีน 1 วัน สามารถลงทะเบียนได้เพียง 3,000 คน ถ้าครบ 3,000 คนแล้ว ต้องเลือกวันที่จะฉีดวันอื่นแทน <br />
4.มีระบบ random OTP บนเว็บ (ไม่ใช่การส่ง sms) <br />
5.หลังจากลงทะเบียนเสร็จ มีหมายนัดและ QRcode <br /> <br />
## วิธีติดตั้ง
1.ดาวน์โหลดและติดตั้งโปรแกรม XAMPP<br />
2.นำโฟลเดอร์โปรเจคนี้ไปไว้ที่ C:\xampp\htdocs\ <br />
3.เข้าโปรแกรม XAMPP และกดปุ่ม start Apache กับ MySQL server<br />
4.เข้าไปที่ localhost/phpmyadmin และสร้าง Database ชื่อว่า registration<br />
5.สร้างตารางซึ่งมี 7 column ชื่อว่า member  ในฐานข้อมูล registration และมีชื่อ column ตามรูปภาพด้านล่าง โดยให้ idcard เป็น Primary Key<br /> <br />
![image](https://user-images.githubusercontent.com/79450551/127745055-494a0994-3714-493d-9af9-15047758b9e3.png)
![image](https://user-images.githubusercontent.com/79450551/127744377-3972d7fd-5114-4be4-b0ff-9414b63ad6d2.png)<br /> <br />
6.สามารถเข้าไปทดสอบลงทะเบียนได้ด้วยการเข้า browser และใส่ localhost/<ชื่อโฟลเดอร์ของโปรเจค> ลงไป จะได้ดังรูปด้านล่าง <br /> <br />
![หน้าลงทะเบียน(index php)](https://user-images.githubusercontent.com/79450551/127744581-f4eb2325-bf38-4144-908f-c00fa59e7c20.png) <br /> <br />
7.เมื่อกรอกข้อมูลครบและกดปุ่มลงทะเบียน ระบบจะ generate random OTP มาตามภาพด้านล่าง <br /> <br />
![หน้าOTP(process php)](https://user-images.githubusercontent.com/79450551/127744692-0314be39-c0ae-4ee9-94f8-7d0c7286d5f4.png) <br /> <br />
8.ให้กรอก OTP ลงไปในช่องด้านซ้ายมือและกดปุ่มยืนยัน <br />
9.หลังจากกดปุ่มยืนยัน ระบบจะพาไปหน้ายืนยันตามรูปด้านล่าง <br /> <br />
![หน้ายืนยัน(add php)](https://user-images.githubusercontent.com/79450551/127744735-e3ccd0fe-a42d-4701-b52f-48e568d00283.png) <br /> <br />
10.สามารถกดปุ่ม "กดเพื่อรับ QRcode" เพื่อดู QRcode ของคุณได้ตามภาพด้านล่าง <br /> <br />
![หน้าQRcode(qrcode php)](https://user-images.githubusercontent.com/79450551/127744883-d708ad4a-2af7-4c54-9290-527dcff0cbcc.png) <br /> <br />
11.เมื่อลองนำโทรศัพท์มา scan จะได้ผลลัพธ์ตามภาพ <br /> <br />
![ตอนสแกน](https://user-images.githubusercontent.com/79450551/127744900-adaa295a-491e-40c2-90fe-016e21274927.jpg) <br /> <br />
## ภาพหลังบ้าน (Database) และ Load test
1.Database <br /> <br />
![database](https://user-images.githubusercontent.com/79450551/127745278-2c4002a1-c289-40fe-8a7d-2edeb08e9f07.png) <br /> <br />
2.JMeter (load test)  <br /> <br />
* Number of Threads (users): 500
* Loop Count: 4 <br /> <br />
![image](https://user-images.githubusercontent.com/79450551/127745332-a392c620-fd9b-4a9e-8b86-3d79492e5bf0.png) <br /> <br />
![image](https://user-images.githubusercontent.com/79450551/127745417-7de81415-32fe-49bf-9d82-1e768b3d6143.png)







