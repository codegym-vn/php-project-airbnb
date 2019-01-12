<?php

use App\House;
use Illuminate\Database\Seeder;

class houseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $house = new House();
        $house->title = 'Rose house with full sea- view Ha Long Bay';
        $house->description = '02 phòng ngủ
                               01 phòng khách
                               01 phòng bếp
                               Hệ thống bể bơi, spa, gym, khu vườn cho trẻ em, thang máy...
                               Hệ thống quán cafe, siêu thị...đầy đủ tiện nghi xung quanh.';
        $house->content = 'Căn hộ được thiết kế theo tiêu chuẩn 4 sao tại trung tâm thành phố Hạ Long. 
                           Không gian thoáng đãng, mát mẻ với thiết kế nội thất hiện đại, đầy đủ tiện nghi. 
                           Đặc biệt, toàn bộ hướng nhìn đều hướng ra Vịnh Hạ Long với biển trong xanh và xa xa là dãy núi đá vôi mờ ảo. 
                           Bạn có thể đón mặt trời mọc và lặn khi tận hưởng những cốc cà phê bên gia đình và bạn bè. 
                           Bạn khó có thể tìm được một căn hộ nào ở Hạ Long với hướng nhìn đẹp và thiết kế hiện đại như căn Rose house.';
        $house->price = '1300000';
        $house->address = 'Hoàng Quốc Việt - Hạ Long Bay';
        $house->status = 'Chưa cho thuê';
        $house->image = '';
        $house->image1 = '';
        $house->image2 = '';
        $house->user_id = 1;
        $house->save();

        $house = new House();
        $house->title = "La Villa D ' Angelina Hà Nội";
        $house->description = '2 phòng master khép kín.
                               1 phòng ngủ nhỏ.
                               1 phòng ngủ với 1 đệm đôi.
                               1 phòng lớn với 4 đệm đôi.
                               Phòng bếp rộng rãi đầy đủ tiện nghi.
                               2 phòng tắm.';
        $house->content = 'La Villa D\' Angelina cung cấp đầy đủ tiện nghi nhất cho bạn và gia đình có những giây phút nghỉ dưỡng tuyệt vời
                           Villa có một điểm cộng cực mạnh đó là có bể bơi vô cực thành kính siêu độc lạ
                           La Villa D\' Angelina rất rộng rãi và có nhiều cây xanh
                           Nơi đây cung cấp cho bạn một không gian sống xanh và có nhận đặt bàn tiệc cho gia đình
                           Nơi đây như một tòa lâu đài nhỏ nhắn ẩn mình giữa cỏ cây hoa lá, có cả một sân vườn đầy hoa trái và những bãi cỏ xanh mướt trải dài.';
        $house->price = '2300000';
        $house->address = 'Sóc Sơn - Hà Nội';
        $house->status = 'Đã cho thuê';
        $house->image = '';
        $house->image1 = '';
        $house->image2 = '';
        $house->user_id = 1;
        $house->save();

        $house = new House();
        $house->title = 'Bi Home Vũng Tàu';
        $house->description = '01 phòng ngủ
                               01 phòng khách
                               01 phòng bếp
                               Hệ thống bể bơi, spa, gym, khu vườn cho trẻ em, thang máy...
                               Hệ thống quán cafe, siêu thị...đầy đủ tiện nghi xung quanh.';
        $house->content = 'Bi Home Vung Tau cung cấp chỗ ở với Wi-Fi miễn phí, cách Ngọn hải đăng Vũng Tàu 12 phút đi bộ.
                           Nằm cách Tượng Chúa Ki-tô Vũng Tàu 1,2 km, căn hộ có nhà bếp với tủ lạnh, TV màn hình phẳng, khu vực tiếp khách và phòng tắm với bồn rửa vệ sinh.
                           Phòng tắm đi kèm vòi sen, máy giặt, đồ vệ sinh cá nhân miễn phí và máy sấy tóc.
                           Căn hộ có sân hiên.
                           Mũi Nghinh Phong cách Bi Home 1,9 km. Sân bay Quốc tế Tân Sơn Nhất cách đó 72 km.';
        $house->price = '900000';
        $house->address = '23 - Full City - Vũng Tàu';
        $house->status = 'Chưa cho thuê';
        $house->image = '';
        $house->image1 = '';
        $house->image2 = '';
        $house->user_id = 1;
        $house->save();

        $house = new House();
        $house->title = "Le Bleu Đà Lạt - Vintage Wooden House";
        $house->description = '2 phòng master khép kín.
                               1 phòng ngủ nhỏ.
                               1 phòng lớn với 2 đệm đôi.
                               Phòng bếp rộng rãi đầy đủ tiện nghi.
                               2 phòng tắm.';
        $house->content = ' Le Bleu đầy tự hào khi được xuất hiện trong nỗi nhớ về Đà Lạt của những bạn khách vô cùng đáng yêu
                            Nơi đây cung cấp cho bạn đầy đủ những nội thất tiện nghi và thoải mái
                            Bạn có thể tổ chức những bữa tiệc nước nướng BBQ ngoài trời
                            Các căn phòng đều có cửa sổ để bạn có thể gần hơn với thiên nhiên';
        $house->price = '1500000';
        $house->address = '15 - Vintage Wooden House - Đà Lạt';
        $house->status = 'Đã cho thuê';
        $house->image = '';
        $house->image1 = '';
        $house->image2 = '';
        $house->user_id = 1;
        $house->save();

        $house = new House();
        $house->title = 'Maika Condohotel - Đà Lạt';
        $house->description = '02 phòng ngủ
                               01 phòng khách
                               01 phòng bếp
                               Căn hộ gần chợ , gần Hồ Xuân Hương , gần Lotte, siêu thị điện thoại ...';
        $house->content = 'Maika Condohotel cung cấp chỗ ở với Wi-Fi miễn phí, cách Nhà Thờ Salesian Don Bosco: 228 m.
                           Căn hộ có nhà bếp với tủ lạnh, TV màn hình phẳng, khu vực tiếp khách và phòng tắm với bồn rửa vệ sinh.
                           Phòng tắm đi kèm vòi sen, máy giặt, đồ vệ sinh cá nhân miễn phí và máy sấy tóc.
                           Và một số điểm ăn uống: Sữa Đậu Nành - Phan Bội Châu: 54 m, Quán Cơm - Lẩu: 68 m, 
                           Cháo Đêm - Phan Bội Châu: 81 m, Bắp Luộc: 82 m
                           ,Tiệm Cơm Sài Gòn 2 - Phan Bội Châu: 84 m';
        $house->price = '900000';
        $house->address = '45 - Phan Bội Châu - Đà Lạt';
        $house->status = 'Chưa cho thuê';
        $house->image = '';
        $house->image1 = '';
        $house->image2 = '';
        $house->user_id = 1;
        $house->save();

        $house = new House();
        $house->title = 'Connect Homestay - Đà Lạt';
        $house->description = '01 phòng ngủ lớn 2 giường,
                               01 phòng ngủ nhỏ,
                               01 phòng khách,
                               01 phòng bếp,
                               Phù hợp với trẻ nhỏ...';
        $house->content = 'Đến với home bạn sẽ được sự đón tiếp nhiệt tình của chủ nhà cũng như các bạn nhân viên của home. 
                           Home sẽ hộ trợ bạn tổ chức BBQ trong không gian quán cf dễ thương ở đây, 
                           nếu bạn muốn lên núi cắm trại hay dã ngoại home sẽ nhiệt tình tư vấn và có thể tham gia cùng bạn.
                           Home sẽ nhiệt tình chỉ dẫn những hướng đi tiện lợi nhất đến các điểm checkin tại thành phố ngàn hoa!
                           những quán cafe siêu chất chỉ cần vài bước chân là bạn có thể đến đó!
                           Đường lớn có thể đậu xe hơi và có cả khu để bạn để xe máy nhé.';
        $house->price = '1400000';
        $house->address = '254 - Hai Bà Trưng - Đà Lạt';
        $house->status = 'Chưa cho thuê';
        $house->image = '';
        $house->image1 = '';
        $house->image2 = '';
        $house->user_id = 1;
        $house->save();

        $house = new House();
        $house->title = 'Pearl Homestay - Đà Nẵng';
        $house->description = '01 phòng ngủ lớn 2 giường,
                               02 phòng ngủ nhỏ,
                               01 phòng khách,
                               03 phòng tắm
                               01 phòng bếp,
                               Phù hợp với nhóm hoặc gia đình từ 4-8 người...';
        $house->content = 'Năm ở vị trí thuận tiện , chỉ cách trung tâm Đà lạt 1,2km , gần các địa điểm du lịch nổi tiếng.
                           Căn hộ của chung tôi được trang bị đầy đủ trang thiết bị cơ bản, đáp ứng được nhu cầu lưu trú của du khách. 
                           Căn hộ mang lại sự ấm áp, thoải mái khi đến lưu trú. 
                           Với không gian thoáng mát, cơ sở vật chất sạch sẽ, có chỗ đậu xe ô tô ngay căn hộ. 
                           Chính những yếu tố đó tạo nên sự yên tâm cho các bạn khi lưu trú tại căn hộ của chúng tôi. 
                           Thời gian check in & check out có thể thay đổi tùy theo nhu cầu của khách. 
                           Giá cả phải chăng không phải lo lắng về sự xô bồ, phức tạp của những ngày lễ tết..';
        $house->price = '2000000';
        $house->address = 'Núi Bà Nà - Đà Nẵng';
        $house->status = 'Chưa cho thuê';
        $house->image = '';
        $house->image1 = '';
        $house->image2 = '';
        $house->user_id = 1;
        $house->save();

        $house = new House();
        $house->title = 'The Windy Bnb - Room B For Windies Đà Lạt';
        $house->description = '01 phòng ngủ lớn,
                               01 phòng ngủ nhỏ,
                               01 phòng khách,
                               01 phòng bếp đầy đủ tiện nghi,
                               Phù hợp với trẻ nhỏ...';
        $house->content = 'The Windy BnB nằm tại đường Hùng Vương, có vị trí vô cùng thuận lợi trong việc di chuyển khám phá 
                           và check in những địa điểm du lịch nổi tiếng của Đà Lạt 15 phút đi xe máy bạn sẽ tới khu vực Trại Mát 
                           với những khu nông trang, vườn hoa, cà phê view thung lũng đèn lung linh về đêm, 
                           đi bộ chưa đến 45 phút bạn sẽ tới được suối tôm - một thắng cảnh thiên nhiên tưởng chừng như bị lãng
                           quên; 0.5km tới chùa Linh Phương; 3km hồ Xuân Hương và chỉ 10 phút xe máy là có thể thỏa mãn mua sắm tại Chợ Đà Lạt.
                           Ở đây, chúng tôi chuẩn bị những bữa sáng đầy dinh dưỡng, với nước trái cây nhà làm, 
                           và gian bếp lớn luôn để sẵn thức ăn cho thực khách, 
                           nếu bạn muốn tự tay nấu món ăn cho người thương chỉ cần để lại lời nhắn với bạn quản gia là đã sử dụng phần nào là được..';
        $house->price = '1400000';
        $house->address = '5B - Room B - Hùng Vương - Đà Lạt';
        $house->status = 'Đã cho thuê';
        $house->image = '';
        $house->image1 = '';
        $house->image2 = '';
        $house->user_id = 1;
        $house->save();
    }
}
