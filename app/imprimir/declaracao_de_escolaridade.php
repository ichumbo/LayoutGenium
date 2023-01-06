$html = "
				<div align='center' style='border:solid 3px #000; height:100%; padding:5px; border-radius: 5px;'>
				<div align='center'>
				<table border='0' cellpadding='1' cellspacing='2' width='940' style='padding-top:5px' align='center'>
				<tr>
					<td align='left' width='325'><img src=$logo></td>
					<td style='font-family:arial;' align='center' valign='top'>
						$cabecalho
						
					</td>
				</tr>
				<tr><td colspan=2><hr size='1' color='#000000' width='940'></td></tr>
				</table>
				</div><Br><br><Br><br><Br><br>
				<div align='center' style='font:bold 24px \'Times New Roman\', Times; text-align:center;'><u>DECLARA&Ccedil;&Atilde;O </u></div><br><Br>
				
				<div style='font:normal 14px Arial; font-family:arial; text-align:justify;  margin-top:50px; line-height:200%; margin-left:20px; margin-right:20px;'>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Declaro para os devidos fins, que <b>".utf8_decode($pegar['nome'])."</b>, filho(a) de <b>".utf8_decode($aluno_dados['pai_nome'])."</b> e de <b>".utf8_decode($aluno_dados['mae_nome'])."</b>,
				nascido (a) <b>".$aluno_dados['aluno_data_nasc']."</b>, natural do(e) <b>".utf8_decode($aluno_dados['aluno_naturalidade'])."</b> <b>".$aluno_dados['aluno_naturalidade_estado']."</b>,
				est&aacute; regularmente matriculado(a) no(a) <b>".utf8_decode($nome_curso['descricao'])."</b> do(a) <b>".utf8_decode($nome_modalidade)."</b>, no hor&aacute;rio de <b>".utf8_decode($horario)."</b>,
				no ano letivo de <b>".$anoletivo."</b> neste Estabelecimento de Ensino.
				</div><Br><br>
				<BR><div align='center' style='font:normal 14px Times;'><b>".utf8_decode($nome_unidade).",</b> <b>".date('d')." de ".utf8_decode($mess)." de ".date('Y').".</b></div><Br><br><br><Br>
				<div align='center' style='font:bold 14px Times;'>________________________________<br>Secretaria</div>
				    
				</div></div>";