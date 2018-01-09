<?php
class SanPham
{
	var $MaSanPham;
	var $SoLuong;
}
	
class GioHang
{
	var $DSSanPham;
	public function __construct()
	{
		$this->DSSanPham = array();
	}
	public function CapNhatSoLuongSP($MaSanPham, $SoLuongMoi)
	{
		for($i = 0; $i < count($this->DSSanPham); $i++){
			if($this->DSSanPham[$i]->MaSanPham == $MaSanPham)
			{
				$this->DSSanPham[$i]->SoLuong = $SoLuongMoi;		
			}
		}
	}
		
	public function XoaSanPham($MaSanPham)
	{
		for($i = 0; $i < count($this->DSSanPham); $i++)
		{
			if($this->DSSanPham[$i]->MaSanPham == $MaSanPham)
				array_splice($this->DSSanPham,$i, 1);
		}
	}
		
	public function ThemSanPham($MaSanPham){
		if(count($this->DSSanPham) == 0){
			//Chưa có sản phảm trong giỏ hàng
			$SP = new SanPham();
			$SP->MaSanPham = $MaSanPham;
			$SP->SoLuong = 1;
			
			$this->DSSanPham[] = $SP;
		}
		else{
			//Đã có sản phẩm trong giỏ hàng rồi
			//cần kiểm tra sản phẩm đó đã tồn tại trong giỏ hàng chưa
			//nếu đã có rồi thì chỉ cần cập nhật số lượng lên 1
			//nếu chưa có thì thềm mới sản phẩm đó vào giỏ hàng
			
			for($i = 0; $i < count($this->DSSanPham); $i++){
				if($this->DSSanPham[$i]->MaSanPham == $id)
					break;
			}
			
			if($i == count($this->DSSanPham)){
				//Có nghĩa là đã duyệt hết giỏ hàng mà ko có sản phẩm cần thềm vào
				//Thêm sản phẩm mới vào giỏ hàng.	
				$SP = new SanPham();
				$SP->MaSanPham = $MaSanPham;
				$SP->SoLuong = 1;
				
				$this->DSSanPham[] = $SP;
			}
			else{
				$this->DSSanPham[$i]->SoLuong++;
			} 
		}
	}
}
?>