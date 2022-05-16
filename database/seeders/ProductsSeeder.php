<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Str;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product')->insert([
            // ['product_name' => 'Cannelé Blackberry','type_id' => 4,'image' => 'blackberry.jpg','price' => 40000,'sale_price' => 40000,'promotion' => 0,'description' => 'Vỏ bánh caramel với nhân sữa trứng mềm, canelé này được làm từ công thức Wild Blackberries truyền thống được tạo ra bởi nhà sản xuất bánh kẹo nổi tiếng của Pháp Philippe Bruneton. Bí mật của quả mâm xôi nằm ở sự kiên nhẫn của người hái quả và khả năng hái chúng riêng lẻ. Dân dã nhưng cực kỳ tinh tế, quả mâm xôi đen quý giá như ngọc trai đen mặc dù chúng có rất nhiều trên toàn cầu. Một loại mứt cổ điển của Pháp.','expiry' => 3],
            // ['product_name' => 'Cannelé Caramel','type_id' => 4,'image' => 'Ccaramel.jpg','price' => 40000,'sale_price'=> 40000, 'promotion' => 0,'description' => 'Vỏ bánh caramel với nhân sữa trứng mềm phủ bên trên một lớp caramel chảy làm tăng thêm chút vị mặn, canelé nguyên bản được làm từ công thức truyền thống hứa hẹn sẽ đem lại vị ngon khó quên cho mọi người','expiry' => 3],
            // ['product_name' => 'Cannelé Chocolate','type_id' => 4,'image' => 'Csocola.jpg','price' => 40000,'sale_price'=> 40000, 'promotion' => 0,'description' => 'Vỏ bánh caramel với nhân sữa trứng mềm được bao bọc bằng một hình hoa thị của sô cô la đen,canelé nguyên bản được làm từ công thức truyền thống hứa hẹn sẽ đem lại vị ngon khó quên cho mọi người','expiry' => 3 ],
            // ['product_name' => 'Cannelé Coffee','type_id' => 4,'image' => 'Ccoffe.jpg','price' => 40000,'sale_price'=> 40000, 'promotion' => 0,'description' => 'Vỏ bánh caramel với nhân sữa trứng mềm phủ bên trên, món canelé này có hương thơm nồng nàm của cà phê, canelé nguyên bản được làm từ công thức truyền thống hứa hẹn sẽ đem lại vị ngon khó quên cho mọi người','expiry' => 3],
            // ['product_name' => 'Cannelé Lemon','type_id' => 4,'image' => 'Clemon.jpg','price' => 40000,'sale_price'=> 40000, 'promotion' => 0,'description' => 'Một lớp vỏ caramel với nhân sữa trứng mềm, loại canelé này có hương thơm với chiết xuất tự nhiên của Chanh. Chanh lần đầu tiên được trồng ở Iraq và Ba Tư và đã trở thành nguyên liệu chính trong các món ăn tinh tế và phức tạp nhất trên thế giới từ Mexico đến Ấn Độ và Việt Nam. Các thủy thủ người Anh là những người đầu tiên giới thiệu Lime ở châu Âu, do đó họ có biệt danh nổi tiếng là "Limey" vì việc sử dụng cam quýt thường xuyên.','expiry' => 3],
            // ['product_name' => 'Cannelé Matcha','type_id' => 4,'image' => 'Cmatcha.jpg','price' => 40000,'sale_price'=> 40000, 'promotion' => 0,'description' => 'Vỏ bánh caramel với nhân sữa trứng mềm phủ bên trên một lớp bột matcha xanh mang đậm văn hóa nhật bản, canelé nguyên bản được làm từ công thức truyền thống hứa hẹn sẽ đem lại vị ngon khó quên cho mọi người','expiry' => 3, 'promotion' => 0 ],
            // ['product_name' => 'Cookie Coco','type_id' => 3,'image' => 'cookie-coco.jpg','price' => 20000 ,'sale_price'=> 20000, 'promotion' => 0,'description'=> 'Một chiếc bánh quy được làm từ bơ trứng sữa có hương thơm với chiết xuất từ dừa tự nhiên thích hợp cho những bữa tiệc trà, tráng miệng. Cây dừa và trái của nó nắm bắt được bản chất của vùng nhiệt đới đầy nắng. Quả dừa thực sự là một loại hạt cực kỳ dẻo dai, có giá trị dinh dưỡng cao và đã đi khắp thế giới lướt sóng để phun lòng bàn tay của họ.','expiry' => 5],
            // ['product_name' => 'Financier Walnut','type_id' => 3,'image' => 'cookie-le.jpg','price' => 20000,'sale_price'=> 20000, 'promotion' => 0, 'description'=> 'Sở dĩ được gọi như vậy vì hình dạng của chúng - những miếng bọt biển nhỏ được nung trong khuôn để trông giống như những thỏi vàng. Để tăng thêm hiệu ứng, Prue đã hoàn thiện những thứ này bằng những miếng caramel nhỏ xíu, giống như những viên vàng nhỏ thêm vào.','expiry' => 5],
            // ['product_name' => 'Ube cookie','type_id' => 3,'image' => 'Ubecookie.jpg','price' => 20000,'sale_price'=> 20000, 'promotion' => 0, 'description'=> 'Bánh quy Ube crinkle là một biến tấu đẹp mắt của người Mỹ gốc Philippines trên loại bánh quy crinkle cổ điển! Ube là một loại khoai lang tím thường được sử dụng trong các món tráng miệng ở Đông Nam Á. Nó có màu tím tự nhiên, với một hương vị tinh tế giống như cả quả hồ trăn và vani. Những chiếc bánh quy ube crinkle này có màu sắc và hương vị rực rỡ từ cả mứt ube halaya và chiết xuất ube!','expiry' => 5 ],
            //['product_name' => 'Premium Longan Cake','type_id' => 5,'image' => 'summerCake.jpg','price' => 795000,'sale_price'=> 556500, 'promotion' => 30, 'description'=> 'Món quà đặc biệt cho mùa hè nóng bỏng. Bạn sẽ cảm nhận được phần cơm nhãn giòn dai hoà lẫn với lớp kem phô mai béo mịn thơm hương nhãn ngay từ miếng đầu tiên. Ngoài ra, bên trong lớp kem còn có phần nhân với rất nhiều nhãn tươi giòn mọng. Bánh sẽ thoả mãn được cả cơn thèm nhãn và thèm biển của các tình yêu.','expiry' => 7],
            //['product_name' => 'Pina colada','type_id' => 5,'image' => 'Pinacolada.jpg','price' => 85000,'sale_price'=> 59500, 'promotion' => 30, 'description'=> 'Món quà đặc biệt cho mùa hè nóng bỏng. Bạn sẽ cảm nhận được lớp kem phô mai béo mịn thơm hương xoài ngay từ miếng đầu tiên. Ngoài ra, bên trong lớp kem còn có phần nhân với rất nhiều chanh dây tươi mọng nước. Bánh sẽ thoả mãn được cả cơn thèm nhãn và thèm biển của các tình yêu.','expiry' => 7],
            //['product_name' => 'Ocean cake','type_id' => 5,'image' => 'OceanCake.jpg','price' => 890000,'sale_price'=> 623000, 'promotion' => 30, 'description'=> 'Món quà đặc biệt cho mùa hè nóng bỏng. Bánh được làm bởi đôi bàn tay khéo léo của những người thợ làm bánh tài năng tại Delicious. Bạn sẽ cảm nhận được mùi matcha hòa quyện cùng với thạch rau câu siêu mềm. Bánh sẽ thoả mãn được cả cơn thèm nhãn và thèm biển của các tình yêu.','expiry' => 7],
            //['product_name' => 'Premium Tiraminsu','type_id' => 5,'image' => 'TraminsuSummer.jpg','price' => 795000,'sale_price'=> 556500,'promotion' => 30, 'description'=> 'Với hương vị quen thuộc đã từng chiều lòng không ít khách hàng của Delicious trong suốt 5 năm qua. Trong Summer Collection lần này, chúng mình “hồi sinh” lạ chiếc bánh tiramisu với diện mạo hoàn toàn mới, nhưng hương vị vẫn giữ lại nguyên bản của những ngày đầu tiên khi Delicious còn là căn bếp nhỏ trên gác xếp.','expiry' => 7],
            //['product_name' => 'Summer Boat','type_id' => 5,'image' => 'SummerWave.jpg','price' => 300000,'sale_price'=> 210000,'promotion' => 30, 'description'=> 'Với hương vị quen thuộc đã từng chiều lòng không ít khách hàng của Delicious trong suốt 5 năm qua. Bánh được lấy cảm hứng từ những chiếc thuyền ngoài xa, những chiếc thuyền mang theo ước mơ, khát khao bao người ra biển khơi','expiry' => 7],
           // ['product_name' => 'Fairy Summer','type_id' => 5,'image' => 'FairySummer.jpg','price' => 550000,'sale_price'=> 385000,'promotion' => 30, 'description'=> 'Với hương vị quen thuộc đã từng chiều lòng không ít khách hàng của Delicious trong suốt 5 năm qua. Bánh được lấy cảm hứng từ bộ phim hoạt hình Crab,"Thế giới loài người, thật là một mớ hỗn độn. Cuộc sống dưới biển tốt hơn bất cứ thứ gì họ có trên đó!" Tôi không biết anh ấy có đúng không,...','expiry' => 7],
            //['product_name' => 'Lavender Birthday','type_id' => 1,'image' => 'Purplehbd.jpg','price' => 300000,'sale_price'=> 300000,'promotion' => 0, 'description'=> 'Món quà đặc biệt dành tặng người thương vào ngày sinh nhật. Kem sữa tươi - đi theo thời gian và sự thay đổi của cuộc sống ..... vẫn là nó dòng kem sữa tươi không bao giờ gọi là cũ . Dòng kem bất thủ đi theo thời gian đã tạo nên một hương vị đặt trưng của kem sữa . Vì thế kem sữa tươi vẫn được mệnh danh là dòng kem đi theo mãi với thời gian','expiry' => 5],         
            //['product_name' => 'Blue Cake','type_id' => 1,'image' => 'BirthdayStar.jpg','price' => 350000,'sale_price'=> 350000,'promotion' => 0, 'description'=> 'Món quà đặc biệt dành tặng người thương vào ngày sinh nhật. Kem sữa tươi - đi theo thời gian và sự thay đổi của cuộc sống ..... vẫn là nó dòng kem sữa tươi không bao giờ gọi là cũ . Dòng kem bất thủ đi theo thời gian đã tạo nên một hương vị đặt trưng của kem sữa . Vì thế kem sữa tươi vẫn được mệnh danh là dòng kem đi theo mãi với thời gian ','expiry' => 5],
            //['product_name' => 'Moon Birthday','type_id' => 1,'image' => 'Birthdaymoon.jpg','price' => 300000,'sale_price'=> 300000,'promotion' => 0, 'description'=> 'Món quà đặc biệt dành tặng người thương vào ngày sinh nhật. Kem sữa tươi - đi theo thời gian và sự thay đổi của cuộc sống ..... vẫn là nó dòng kem sữa tươi không bao giờ gọi là cũ . Dòng kem bất thủ đi theo thời gian đã tạo nên một hương vị đặt trưng của kem sữa . Vì thế kem sữa tươi vẫn được mệnh danh là dòng kem đi theo mãi với thời gian ','expiry' => 5],
            //['product_name' => 'Pink Cake','type_id' => 1,'image' => 'BirthdayPink.jpg','price' => 260000,'sale_price'=> 260000,'promotion' => 0, 'description'=> 'Món quà đặc biệt dành tặng người thương vào ngày sinh nhật. Kem sữa tươi - đi theo thời gian và sự thay đổi của cuộc sống ..... vẫn là nó dòng kem sữa tươi không bao giờ gọi là cũ . Dòng kem bất thủ đi theo thời gian đã tạo nên một hương vị đặt trưng của kem sữa . Vì thế kem sữa tươi vẫn được mệnh danh là dòng kem đi theo mãi với thời gian ','expiry' => 5],
            //['product_name' => 'Cutie Frog Cake','type_id' => 1,'image' => 'BirthdayFrog.jpg','price' => 400000,'sale_price'=> 400000,'promotion' => 0, 'description'=> 'Món quà đặc biệt dành tặng người thương vào ngày sinh nhật. Kem sữa tươi - đi theo thời gian và sự thay đổi của cuộc sống ..... vẫn là nó dòng kem sữa tươi không bao giờ gọi là cũ . Dòng kem bất thủ đi theo thời gian đã tạo nên một hương vị đặt trưng của kem sữa . Vì thế kem sữa tươi vẫn được mệnh danh là dòng kem đi theo mãi với thời gian ','expiry' => 5],
            //['product_name' => 'Pink Moon Cake','type_id' => 1,'image' => 'BirthdayPinkMoon.jpg','price' => 400000,'sale_price'=> 400000,'promotion' => 0, 'description'=> 'Món quà đặc biệt dành tặng người thương vào ngày sinh nhật. Kem sữa tươi - đi theo thời gian và sự thay đổi của cuộc sống ..... vẫn là nó dòng kem sữa tươi không bao giờ gọi là cũ . Dòng kem bất thủ đi theo thời gian đã tạo nên một hương vị đặt trưng của kem sữa . Vì thế kem sữa tươi vẫn được mệnh danh là dòng kem đi theo mãi với thời gian ','expiry' => 5],
            ['product_name' => 'Wedding Socola','type_id' => 2,'image' => 'WeddingSocola.jpg','price' => 1200000,'sale_price'=> 1200000,'promotion' => 0, 'description'=> 'Ai lại không muốn một chiếc bánh lung linh vào ngày cưới chứ. Delicious thấu hiểu điều đó và đem lại cho bạn một chiếc bánh với thiết kế tinh tế ,sang trọng cùng với hương vị lôi cuốn trong từng miếng bánh. ','expiry' => 5],
            ['product_name' => 'Wedding Violet','type_id' => 2,'image' => 'WeddingViolet.jpg','price' => 2300000,'sale_price'=> 2300000,'promotion' => 0, 'description'=> 'Ai lại không muốn một chiếc bánh lung linh vào ngày cưới chứ. Delicious thấu hiểu điều đó và đem lại cho bạn một chiếc bánh với thiết kế tinh tế ,sang trọng cùng với hương vị lôi cuốn trong từng miếng bánh. ','expiry' => 5],
            ['product_name' => 'Wedding Blue','type_id' => 2,'image' => 'WeddingBlue.jpg','price' => 1600000,'sale_price'=> 1600000,'promotion' => 0, 'description'=> 'Ai lại không muốn một chiếc bánh lung linh vào ngày cưới chứ. Delicious thấu hiểu điều đó và đem lại cho bạn một chiếc bánh với thiết kế tinh tế ,sang trọng cùng với hương vị lôi cuốn trong từng miếng bánh. ','expiry' => 5],
        ]);


    }
}
