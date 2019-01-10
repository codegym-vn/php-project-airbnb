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
        $house->user_id = 1;
        $house->save();

        $house = new House();
        $house->title = "La Villa D ' Angelina";
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
        $house->user_id = 1;
        $house->save();

        $house = new House();
        $house->title = 'Maika Condohotel';
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
        $house->user_id = 1;
        $house->save();
    }
}
