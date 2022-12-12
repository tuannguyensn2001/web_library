Hướng dẫn cài đặt:

B1: Tải Laragon https://laragon.org/

B2: Clone source code vào thư mục cài đặt laragon , sau đó vào folder www

Ví dụ: Clone source code vào C:\laragon\www

B3: Mở source code, tạo file .env, copy từ .env.example

B4: Mở Laragon, chuột phải vào chọn Preferences

B5: Chuyển sang tab Services & Port, bỏ tick Apache, tick Nginx vào sửa ô input bên cạnh Nginx là 80

B6: Start Laragon

B7: Chuột phải vào laragon chọn nginx -> site_enabled -> auto.web_library.test.conf

B8: Sửa dòng số 4, thêm /src/public

Ví dụ: root "C:/laragon/www/web_library/src/public";

B9: Thêm đoạn code sau sau dòng số 11

location /assets {

alias "C:/laragon/www/web_library/src/public/assets";

}

B10: Restart lại Laragon, sau đó truy cập trang web_library.test -> Done