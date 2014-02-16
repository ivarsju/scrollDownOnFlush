<?php
function flush_buffers()
{
    ob_end_flush();
    @ob_flush();
    flush();
    ob_start();
}

ob_start();
?>
<!DOCTYPE html> 
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Scroll Down on Flush</title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="scroll-down-on-flush.lib.js" type="text/javascript"></script>
		<script src="scroll-down-on-flush.mod.js" type="text/javascript"></script>
		<style type="text/css">
			div {
				margin: 10px;
				width: 500px;
			}
			p {
				font-size: 2em;
			}
		</style>
	</head>
	<body>
		<div>
			<?php
			echo '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ligula velit, laoreet a massa in, placerat volutpat nisi. Phasellus lacus arcu, pharetra in ante non, viverra adipiscing ante. Morbi aliquet nisi metus, eget congue mi elementum in. Quisque id aliquam est. Vestibulum hendrerit enim vitae faucibus convallis. Aenean ut magna vitae mi lacinia blandit. Cras pharetra non arcu non aliquet. Vivamus vitae dui metus. Morbi suscipit faucibus lorem, in bibendum sapien tempus sit amet.</p>';
			flush_buffers();
			usleep(500000);

			echo '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et lectus blandit, vehicula justo vitae, aliquet lacus. Proin et turpis odio. Maecenas eget purus odio. Duis ac nunc nulla. Pellentesque suscipit nulla non nunc elementum fringilla ac sed justo. Ut eget neque eget quam egestas scelerisque. Nulla faucibus sodales est, quis vestibulum ligula imperdiet a. Cras venenatis leo id mi dictum vulputate. Duis congue fringilla justo. Aliquam non congue libero, sed suscipit quam. Aenean eget turpis lobortis lacus viverra rhoncus. Ut semper nunc nisi, sit amet eleifend enim cursus et.</p>';
			flush_buffers();
			usleep(500000);

			echo '<p>Maecenas vehicula ullamcorper lacus, vitae ultrices est placerat a. Donec porta risus a leo fermentum, vel aliquet enim adipiscing. Aliquam consectetur velit id lacus adipiscing consequat. Quisque sodales nec purus tristique placerat. Phasellus rhoncus tincidunt purus, eget cursus ligula condimentum non. Donec a gravida diam, vel luctus lorem. Integer facilisis, purus at sagittis condimentum, enim purus elementum quam, vestibulum imperdiet dolor lorem sed risus. Etiam in elit eros. Cras quis eros lorem. Suspendisse potenti. Curabitur orci justo, molestie id interdum at, placerat nec orci. Morbi ullamcorper, sapien ac tincidunt ornare, dui turpis venenatis tellus, et tempor enim est sit amet nisi. Nullam sed hendrerit dui.</p>';
			flush_buffers();
			usleep(500000);

			echo '<p>Phasellus ultricies dolor in magna suscipit tincidunt. Mauris rhoncus cursus eros. Duis venenatis odio in neque consequat, sed vehicula nibh interdum. Nulla euismod quam vel tincidunt suscipit. Cras orci quam, egestas a scelerisque vel, pharetra at libero. Donec ut pharetra ante. Aliquam suscipit condimentum ante non laoreet.</p>';
			flush_buffers();
			usleep(500000);

			echo '<p>Nam consequat non ligula at imperdiet. Donec eget sollicitudin nisl, non feugiat velit. Sed congue felis ut risus ultricies pharetra. Nullam aliquam tortor sit amet congue gravida. Nam quam felis, fermentum quis consectetur vel, pellentesque sed tellus. Suspendisse ac sagittis mi. Proin tempor cursus purus sit amet vehicula.</p>';
			flush_buffers();
			usleep(500000);

			echo '<p>Pellentesque interdum nisl vitae ultrices sollicitudin. Aliquam dapibus pharetra ligula, nec sollicitudin quam malesuada eu. Donec convallis, magna et tincidunt lacinia, sapien lectus dictum nisi, ut interdum erat turpis vel metus. Nulla id sem sem. Cras in dignissim nunc, non varius purus. Praesent mollis cursus vulputate. Suspendisse adipiscing elit purus, nec cursus libero vulputate tincidunt. Nam porta facilisis eleifend. Duis bibendum augue ac tempor lacinia. Nulla tempor enim non lectus pulvinar interdum. In hac habitasse platea dictumst.</p>';
			flush_buffers();
			usleep(500000);

			echo '<p>Maecenas mattis accumsan erat et luctus. Phasellus placerat ligula id scelerisque eleifend. Proin semper ut erat sed volutpat. Ut sodales lacus elementum metus ultrices dictum. Donec sed ipsum blandit ligula feugiat porttitor ut sed ipsum. Donec dignissim, lorem et congue vehicula, ipsum lectus imperdiet massa, eu dictum turpis mauris id nisi. Sed rhoncus arcu sollicitudin massa fringilla ornare. Curabitur dictum justo eu augue vehicula fermentum.</p>';
			flush_buffers();
			usleep(500000);

			echo '<p>Proin et sagittis felis. Praesent condimentum arcu ac lacus posuere adipiscing. Vestibulum facilisis orci neque, ac consequat neque porta quis. Aliquam vulputate risus quis enim convallis iaculis. Nunc sit amet ligula lorem. Proin lobortis, felis eu ultricies dapibus, orci diam cursus turpis, eu congue nisi urna id mi. Etiam sed tincidunt turpis, vel rhoncus ipsum. Morbi eu leo eget nisi cursus sodales nec eget neque. Nullam eros urna, consequat eget velit a, commodo lacinia elit. Ut a auctor eros, in laoreet nulla. Praesent mattis justo eget dignissim dignissim. Donec enim nisi, sagittis sed arcu non, tristique volutpat elit.</p>';
			flush_buffers();
			usleep(500000);

			echo '<p>Praesent malesuada lorem eu lectus dignissim malesuada. Vestibulum est augue, volutpat vulputate condimentum id, fermentum a nunc. Duis sed lectus leo. Duis laoreet rhoncus risus. Integer velit dolor, cursus ut lectus et, sagittis laoreet augue. Duis at dignissim dolor. Curabitur vitae porttitor leo, vitae euismod turpis.</p>';
			flush_buffers();
			usleep(500000);

			echo '<p>Suspendisse id urna imperdiet, convallis dui sed, pellentesque nulla. Pellentesque vestibulum nunc turpis, non semper libero ultrices vel. Aliquam luctus odio ut augue condimentum interdum. Quisque condimentum sollicitudin odio, vel auctor elit laoreet a. Etiam tincidunt justo ac sem malesuada, a ultrices sem luctus. Nam posuere arcu augue, non fringilla metus cursus eget. Nunc sagittis, odio eu ultricies posuere, erat erat vestibulum lacus, vel facilisis massa dui at purus. Mauris tristique, augue vel porttitor vulputate, augue magna vestibulum sem, non auctor risus ante eu orci. Maecenas id nulla vitae justo fermentum varius.</p>';
			flush_buffers();
			usleep(500000);

			echo '<p>Nullam et nibh fermentum, dignissim orci id, posuere ante. Quisque sapien ligula, faucibus quis pulvinar sit amet, pretium ac velit. Vestibulum in nibh ac nibh pulvinar molestie in sit amet dui. Proin vel purus hendrerit, iaculis lacus sit amet, tristique ipsum. Cras eu erat orci. Maecenas ultrices purus non dictum malesuada. Quisque vel mauris consequat, fringilla erat nec, varius mi.</p>';
			flush_buffers();
			usleep(500000);

			echo '<p>Nunc eu euismod justo, sit amet convallis nisl. Cras tempor magna sit amet felis hendrerit, in malesuada purus suscipit. Aliquam in dictum tortor. Integer feugiat magna non tortor aliquam varius. Aliquam a euismod eros, a feugiat tellus. Nunc vitae leo tempus, rutrum arcu sit amet, semper est. Phasellus sit amet tristique dolor. Nullam sodales commodo turpis vel pulvinar. Praesent suscipit fermentum dolor, pulvinar egestas nulla tempus non. Integer pretium posuere nulla at mollis. Phasellus dapibus sapien ut molestie consequat. Morbi congue dignissim arcu eu aliquam. Aliquam hendrerit molestie magna sed ullamcorper.</p>';
			flush_buffers();
			usleep(500000);

			echo '<p>Suspendisse gravida accumsan velit, sit amet ornare tellus gravida quis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse potenti. Ut vel condimentum ante. Praesent facilisis diam eu odio sollicitudin dictum. Nunc quis rutrum purus. Mauris blandit iaculis tincidunt. Vivamus tortor tortor, blandit id arcu in, cursus luctus nisl. Curabitur consequat id enim vitae rutrum. Nam nec rhoncus lectus.</p>';
			flush_buffers();
			usleep(500000);

			echo '<p>Etiam hendrerit dolor enim, elementum iaculis libero vehicula ac. Phasellus at interdum magna. Integer in nulla mi. Proin vitae iaculis leo. Pellentesque tempus fermentum mi ut venenatis. Donec ut quam ut est egestas pharetra eget vel lorem. Sed enim felis, commodo ut sollicitudin quis, fermentum et diam. Proin arcu erat, eleifend vitae nibh id, accumsan vestibulum augue. Fusce aliquet turpis nisi, tristique ultrices nibh vehicula quis. Duis mauris dolor, gravida eu massa in, tristique egestas neque. Duis suscipit magna vel convallis laoreet. Ut sem risus, facilisis ut placerat et, luctus accumsan eros.</p>';
			flush_buffers();
			usleep(500000);

			echo '<p>Ut quis mi dui. Maecenas quis risus nec eros sollicitudin ultricies quis sit amet leo. Nam rhoncus justo id adipiscing volutpat. Cras eget lobortis arcu. Pellentesque euismod nisl et ultrices porta. Vestibulum tempus velit eget tristique vestibulum. Phasellus at felis nec est sagittis blandit. Suspendisse a sollicitudin odio. Suspendisse convallis congue diam. Ut est ante, adipiscing ut est a, congue accumsan arcu. Maecenas scelerisque ultrices luctus. Cras quis vehicula tortor, vel blandit tortor.</p>';
			flush_buffers();
			usleep(500000);

			echo '<p>Vivamus molestie quam scelerisque, convallis est non, semper tellus. Nunc venenatis nunc lacus, vitae mattis urna blandit sit amet. Ut lorem ante, commodo in accumsan vitae, venenatis in lacus. Nulla facilisi. Quisque eget quam scelerisque, tincidunt eros in, porttitor metus. Mauris lectus lorem, semper sit amet pretium quis, accumsan ac metus. Fusce pulvinar sodales egestas. Vivamus in rhoncus velit. Aenean a tellus dapibus nibh fringilla tristique ac quis risus.</p>';
			flush_buffers();
			usleep(500000);
			
			echo '<p>End of the Text</p>';
			flush_buffers();
			usleep(500000);
			?>
		</div>
	</body>
</html>