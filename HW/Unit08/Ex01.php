<?php 
	class Post{
		var $title;
		var $url;
		var $description;
		var $content;

		function inTT(){
			echo "<br><b>Thông tin bài viết:</b> ";
			echo "<br><b>Tiêu đề:</b> ".$this->title;
			echo "<br><b>Đường dẫn:</b> ".$this->url;
			echo "<br><b>Mô tả:</b> ".$this->description;
			echo "<br><b>Nội dung:</b> ".$this->content;
		}
	}

	class Category{
		var $name;
		var $parent_id;
		var $url;
		var $thumbnail;
		var $description;

		function inTT(){
			echo "<br><b>Thông tin danh mục:</b> ";
			echo "<br><b>Tên danh mục:</b> ".$this->name;
			echo "<br><b>Danh mục cha:</b> ".$this->parent_id;
			echo "<br><b>Đường dẫn:</b> ".$this->url;
			echo "<br><b>Mô tả:</b> ".$this->description;
			echo "<br><b>Ảnh hiển thị: <br></b><img src='".$this->thumbnail."' width='150px' height='100px'>";
		}
	}

	class User{
		var $name;
		var $email;
		var $password;
		var $avatar;

		function inTT(){
			echo "<br><b>Thông tin người dùng:</b> ";
			echo "<br><b>Tên người dùng:</b> ".$this->name;
			echo "<br><b>Email:</b> ".$this->email;
			echo "<br><b>Mật khẩu:</b> ".$this->password;
			echo "<br><b>Ảnh đại diện: <br></b><img src='".$this->avatar."' width='150px' height='100px'>";
		}
	}
	$post1 = new Post();
	$post1->title='Hai người xuất huyết não sau tiêm vaccine Covid-19';
	$post1->url='https://portal.zent.edu.vn/class-room/PHP-MySQL2020006/units?exercise=172&unit=603';
	$post1->description="Ngày 3/8, một ngày sau khi Mỹ chấm dứt Hiệp ước kiểm soát tên lửa tầm trung và tầm ngắn (INF), Bộ trưởng Quốc phòng Mark Esper tuyên bố ủng hộ việc Mỹ sớm triển khai hệ thống tên lửa tầm trung mới ở châu Á.";
	$post1->content="Samsung Galaxy Note10 vs Galaxy S10+ có sự khác biệt rõ ràng cả về ngoại hình cũng như các tính năng mới.";
	$post1->inTT();
	echo "<br>";

	$cate1 = new Category();
	$cate1->name="Thời sự";
	$cate1->parent_id="1";
	$cate1->url="abcdefgh";
	$cate1->thumbnail="https://nhandaovadoisong.com.vn/wp-content/uploads/2019/05/hinh-anh-bong-hoa-dep68.jpg";
	$cate1->description="Samsung Galaxy Note10 vs Galaxy S10+ có sự khác biệt rõ ràng cả về ngoại hình cũng như các tính năng mới";
	$cate1->inTT();
	echo "<br>";

	$user1 = new User();
	$user1->name="Hà Thị Đào";
	$user1->email="htdao@gmail.com";
	$user1->password="123456789";
	$user1->avatar="https://tse2.mm.bing.net/th?id=OIP.nUcgn_GlMubGV4pFFlJb4gHaE8&pid=Api&P=0&w=276&h=185";
	$user1->inTT();
 ?>