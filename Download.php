
	<?php
		
		include_once('dbconn.php');
								
		require('fpdf/fpdf.php');
		
		class PDF extends FPDF
		{
			function Header()
			{
				$this->SetFont('Times', 'B', 20);
				$this->Cell(70);
				//$this->Cell(0,20,'Records of People',0,0,'C');
				$this->Ln(2);
			}
			function Footer()
			{
				$this->SetY(-15);
				$this->SetFont('Times', 'I', 8);
				$this->Cell(0,20,'Page '.$this->PageNo()."/{pages}",0,0,'C');
			}
		}
		
		$mypdf = new PDF();
		$mypdf->SetAutoPageBreak(true,215);
		
		$mypdf -> AliasNbPages('{pages}');

		$mypdf->AddPage();

		$mypdf->SetFont('Times','',17);
		$i=0;

					
		while($i<9)
		{								
			$mypdf->Ln();
			$Query = "SELECT * FROM Picture";
			
			$result = $link->query($Query);
			
			if($result->num_rows > 0)
			{
				$m=0;
				while($row = $result->fetch_assoc())
				{
					if($i==$m)
					{
					//	echo  "<img src ='{$row['Pic_dir']}' width='23%' height:='23%'>";
						$mypdf->Cell(65,12,$row['Pic_dir'],1);
						break;
					}
					$m++;
				}
			}
			 
	
			$Query1 = "SELECT * FROM Person";
			
			$result1 = $link->query($Query1);
			
			if($result1->num_rows > 0)
			{
				$n=0;
				while($row1 = mysqli_fetch_array($result1))
				{
					if($i==$n)
					{
						//echo  $row['P_fname'];
						$mypdf->Cell(55,12,$row1['P_fname'],1);
						break;
					}
					$n++;
				}
			}
		
			$i++;
			
		}
		mysqli_close($link);
		
		$mypdf->Output();
?>
	