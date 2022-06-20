<?php
class pager
{
	function findStart($limit)
	{
		if ((!isset($_GET['page'])) || ($_GET['page'] == "1"))
		{
			$start = 0;
			$_GET['page'] = 1;
		}
		else
		{
			$start = ($_GET['page']-1) * $limit;
		}
		
		return $start;
	}

	function findPages($count, $limit)
	{
		$page = (($count % $limit) == 0) ? $count / $limit : floor($count / $limit) + 1;
		return $page;
	}

	

	function pageList($crent, $page)
	{
		$listpage="<ul class='pagination'>";
			if(($crent!=1)&&($crent))
			{
				$listpage.='<li>'."<a href =\"".$_SERVER['PHP_SELF']."?page=1\" title=\"Trang đầu\">&laquo;</a></li>";
			}
			if(((int)$crent-1)>0)
			{
				$listpage.='<li>'."<a href =\"".$_SERVER['PHP_SELF']."?page=".((int)$crent-1)."\" title=\"Về trang trước\">&lsaquo;</a></li>";
			}
			/*if($curpage>2)
				$page_list.="...";*/
				
			$vtdau=max((int)$crent-2,1);
			$vtcuoi=min((int)$crent+2,$page);
			
				for($i=$vtdau;$i<=$vtcuoi;$i++)
				{
					if($i==$crent)
					{
						$listpage.='<li class="active"><a>'.$i."</a></li>";
					}
					else
					{
						$listpage.='<li>'."<a href ='".$_SERVER['PHP_SELF']."?page=".$i."' title='Trang ".$i."'>".$i."</a></li>";
					}
				}

		/*	if(($curpage+2)<$pages)
				$page_list.="...";*/

			if(((int)$crent+1)<=$page)
			{
				$listpage.='<li>'."<a href =\"".$_SERVER['PHP_SELF']."?page=".((int)$crent+1)."\" title=\"Đến trang sau\">&rsaquo;</a></li>";
				$listpage.='<li>'."<a href =\"".$_SERVER['PHP_SELF']."?page=".$page."\" title=\"Đến trang cuối\">&raquo;</a></li>";
				$listpage.='</ul>';
			}
			return $listpage;
	}

	function nextPrev($crent,$page)//chỉ hiển thị 2 nút Truoc và Sau
		{
			$next_prev="";
			if(($crent-1)<=0)
			{
				$next_prev.="Về trang trước";
			}
			else
			{
				$next_prev.="<a href =\"".$_SERVER['PHP_SELF']."?page=".($crent-1)."\">Về trang trước</a>";
			}
			$next_prev.=" | ";
			if(($crent+1)>$page)
			{
				$next_prev.="Đến trang sau";
			}
			else
			{
				$next_prev.="<a href =\"".$_SERVER['PHP_SELF']."?page=".($crent+1)."\">Đến trang sau</a>";
			}
			return $next_prev;
		}
}
?>