
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
		$mypdf->SetAutoPageBreak(true,130);
		
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
						$PDFimage = $row['Pic_dir'];
						$mypdf->Cell(34,30,$mypdf->Image($PDFimage,20,$mypdf->GetY(),15), 1,0,'L',false);
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
						$mypdf->Cell(34,30,$row1['P_fname'],1);
						$mypdf->Cell(34,30,$row1['P_lname'],1);
						$mypdf->Cell(34,30,$row1['Age'],1);
						$mypdf->Cell(34,30,$row1['Gender'],1);
					}
					$n++;
				}
			}
			$i++;
		}
		mysqli_close($link);
		
		$mypdf->Output();
?>
	