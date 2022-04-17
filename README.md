# PSR
## PSR-0
Nếu sử dụng PSR-0, không cho phép sử dụng namespace prefix, vì vậy bạn phải tạo đường dẫn đúng cho thư mục của bạn.
### File HomeController.php
[Github] (https://github.com/TLoc170702/PSR/blob/main/PSR-0/src/Controllers/HomeController.php)
### File Users.php
[Github](https://github.com/TLoc170702/PSR/blob/main/PSR-0/src/Models/User.php)
### File composer.json
[Github](https://github.com/TLoc170702/PSR/blob/main/PSR-0/composer.json)
### File index.php
[Github](https://github.com/TLoc170702/PSR/blob/main/PSR-0/index.php)

Tiến hành chạy autoload:

$ composer dump-autoload

Chạy file index.php để test

$ php index.php

Và tất nhiên kết quả là OK. Tuy nhiên bạn để ý thấy file composer.json khá phức tạp.

Bây giờ bài toán đặt ra là giả sử giờ bạn muốn thêm 1 lớp có đường dẫn khác các đường dẫn sẵn có, chẳng hạn Repositories 

[Github](https://github.com/TLoc170702/PSR/blob/main/PSR-0/src/Repositories/HomeRepository.php)

Lúc đó, bạn cần cập nhật lại composer.json

## PSR-4

Để khắc phục nhược điểm phải cập nhật composer.json như trên, giờ ta sẽ chuyển sang dùng chuẩn PSR-4 với namespace prefix để giải quyết vấn đề. File composer.json 

[Github](https://github.com/TLoc170702/PSR/blob/main/PSR-4/composer.json)

### File HomeController.php

[Github](https://github.com/TLoc170702/PSR/blob/main/PSR-4/src/Controllers/HomeController.php)
### File User.php

[Github](https://github.com/TLoc170702/PSR/blob/main/PSR-4/src/Models/User.php)

Khi đó thêm với HomeRepository, chỉ cần đặt namespace prefix Viblo cho lớp này là được mà không cần cập nhật composer.json => đơn giản và thuận tiện hơn khá nhiều.
### File HomeRepository.php sẽ như sau:

[Github](https://github.com/TLoc170702/PSR/blob/main/PSR-4/src/Repositories/HomeRepository.php)
### File index.php để test sẽ như sau:

[Github](https://github.com/TLoc170702/PSR/blob/main/PSR-4/index.php)











