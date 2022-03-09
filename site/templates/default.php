<!DOCTYPE html>
<html>
	<head>
		<title><?= $page->title()->html() ?>, <?= $site->title()->html() ?></title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://use.typekit.net/vez5lsq.css">
		<?= css('assets/css/styles.css') ?>
	</head>
	<body>
		<svg xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" style="position: absolute; width: 0; height: 0" id="__SVG_SPRITE_NODE__">
			<!--
				This is an invisible SVG Sprite. use the icons contained in it by adding an HTML node like this:
				<svg class="icon">
					<use xlink:href="#twitter"></use>
				</svg>
				Learn more about this technique: https://seanrice.net/code/design-system/2018/10/12/styling-svg-icons-with-css.html
			-->
			<symbol viewBox="0 0 48 48" id="error">
				<path d="M24,0 C37.254834,0 48,10.745166 48,24 C48,37.254834 37.254834,48 24,48 C10.745166,48 0,37.254834 0,24 C0,10.745166 10.745166,0 24,0 Z M19.7573593,15.5147186 C18.5857864,14.3431458 16.6862915,14.3431458 15.5147186,15.5147186 C14.3431458,16.6862915 14.3431458,18.5857864 15.5147186,19.7573593 L15.5147186,19.7573593 L19.757039,24.000039 L15.5147186,28.2426407 C14.3431458,29.4142136 14.3431458,31.3137085 15.5147186,32.4852814 C16.6862915,33.6568542 18.5857864,33.6568542 19.7573593,32.4852814 L19.7573593,32.4852814 L24.000039,28.243039 L28.2426407,32.4852814 C29.4142136,33.6568542 31.3137085,33.6568542 32.4852814,32.4852814 C33.6568542,31.3137085 33.6568542,29.4142136 32.4852814,28.2426407 L32.4852814,28.2426407 L28.243039,24.000039 L32.4852814,19.7573593 C33.6568542,18.5857864 33.6568542,16.6862915 32.4852814,15.5147186 C31.3137085,14.3431458 29.4142136,14.3431458 28.2426407,15.5147186 L28.2426407,15.5147186 L24.000039,19.757039 Z"></path>
			</symbol>
			<symbol viewBox="0 0 48 48" id="twitter">
				<path d="M48,8.7352835 C46.2363092,9.53846154 44.3373833,10.0816179 42.3454834,10.3243048 C44.3796443,9.07620079 45.9404825,7.09714698 46.6758232,4.73961719 C44.7712625,5.89526905 42.6666667,6.73600578 40.4183835,7.18671 C38.6265188,5.22499097 36.0655045,4 33.2312027,4 C27.796443,4 23.3872161,8.5214879 23.3872161,14.0975081 C23.3872161,14.8891296 23.471738,15.6576381 23.6407818,16.3972553 C15.4562423,15.9754424 8.20144392,11.9595522 3.34143335,5.84326472 C2.49339672,7.33983388 2.00880437,9.07620079 2.00880437,10.9252438 C2.00880437,14.4268689 3.74713858,17.5182376 6.38985737,19.3297219 C4.77830604,19.2806067 3.25691143,18.8212351 1.92709984,18.0700614 L1.92709984,18.194294 C1.92709984,23.0884796 5.32206374,27.1708198 9.82989963,28.0953413 C9.00440218,28.3322499 8.13382638,28.4507042 7.2350766,28.4507042 C6.60116218,28.4507042 5.98133474,28.3900325 5.38122909,28.2715782 C6.63497095,32.2816901 10.2694136,35.2026002 14.5800317,35.2806067 C11.2104244,37.9906103 6.96178905,39.6056338 2.34970946,39.6056338 C1.55520338,39.6056338 0.769149498,39.5594077 0,39.4669556 C4.35851382,42.3271939 9.5368903,44 15.0956154,44 C33.2114809,44 43.1146329,28.6153846 43.1146329,15.2704948 C43.1146329,14.8313471 43.1061807,14.3921993 43.0892763,13.961719 C45.0135587,12.5373781 46.6842754,10.7605634 48,8.7352835"></path>
			</symbol>
			<symbol viewBox="0 0 36 36" id="logo">
				<path d="M9,5 C13.5,5 13.4998671,14.0703111 18,14.0703111 C22.5001383,14.0703111 22.5,5 27,5 C30,5 33,5 36,5 L27.0001376,32 C24.0000459,26 21,23 18,23 C15,23 12.0000468,26 9.00014034,32 L0,5 C3,5 6,5 9,5 Z" id="B"></path>
			</symbol>
			<symbol viewBox="0 0 48 48" id="thedots">
				<path d="M24,0 C37.254834,0 48,10.745166 48,24 C48,37.254834 37.254834,48 24,48 C10.745166,48 0,37.254834 0,24 C0,10.745166 10.745166,0 24,0 Z M24,31.5 C21.9289322,31.5 20.25,33.1789322 20.25,35.25 C20.25,37.3210678 21.9289322,39 24,39 C26.0710678,39 27.75,37.3210678 27.75,35.25 C27.75,33.1789322 26.0710678,31.5 24,31.5 Z M24,20.25 C21.9289322,20.25 20.25,21.9289322 20.25,24 C20.25,26.0710678 21.9289322,27.75 24,27.75 C26.0710678,27.75 27.75,26.0710678 27.75,24 C27.75,21.9289322 26.0710678,20.25 24,20.25 Z M12.75,20.25 C10.6789322,20.25 9,21.9289322 9,24 C9,26.0710678 10.6789322,27.75 12.75,27.75 C14.8210678,27.75 16.5,26.0710678 16.5,24 C16.5,21.9289322 14.8210678,20.25 12.75,20.25 Z M35.25,20.25 C33.1789322,20.25 31.5,21.9289322 31.5,24 C31.5,26.0710678 33.1789322,27.75 35.25,27.75 C37.3210678,27.75 39,26.0710678 39,24 C39,21.9289322 37.3210678,20.25 35.25,20.25 Z M24,9 C21.9289322,9 20.25,10.6789322 20.25,12.75 C20.25,14.8210678 21.9289322,16.5 24,16.5 C26.0710678,16.5 27.75,14.8210678 27.75,12.75 C27.75,10.6789322 26.0710678,9 24,9 Z"></path>
			</symbol>
			<symbol viewBox="0 0 48 48" id="pexels">
				<path d="M0,2.73934667 L0,45.2606533 C0,46.7735099 1.22636917,48 2.73934667,48 L45.2606533,48 C46.7735099,48 48,46.7736308 48,45.2606533 L48,2.73934667 C48,1.22636917 46.7735099,0 45.2606533,0 L2.73934667,0 C1.22636917,0 0,1.22636917 0,2.73934667 Z M26.0909091,9 C27.6424,9 29.1181818,9.32871071 30.4545455,9.92123143 C34.3074182,11.6296857 37,15.5314343 37,20.0714286 C37,24.6113786 34.3074182,28.5131714 30.4545455,30.2217143 C29.1181818,30.8142571 27.6424,31.1428571 26.0909091,31.1428571 L26.0909091,40 L13,40 L13,9 L26.0909091,9 Z M17.5,13.5 L17.5,35.5 L21.7584769,35.5 L21.7584769,26.7 L26.0169537,26.7 L26.0237673,26.69736 C29.5146537,26.76666 32.5635102,23.82548 32.4989943,20.000318 L32.4845155,19.143638 C32.4304328,15.924026 29.8244579,13.380078 26.7104467,13.506578 L26.0601773,13.516764 L26.0169537,13.5 L17.5,13.5 Z"></path>
			</symbol>
			<symbol viewBox="0 0 48 48" id="linkedin">
				<path d="M46,44 L36.2753998,44 L36.2753998,29.9384005 C36.2753998,26.257796 34.7542333,23.7451495 31.4092192,23.7451495 C28.8506585,23.7451495 27.4277987,25.4407377 26.7655221,27.0748543 C26.5171684,27.6613946 26.5559737,28.478453 26.5559737,29.2955113 L26.5559737,44 L16.9219191,44 C16.9219191,44 17.046096,19.0912467 16.9219191,16.8270474 L26.5559737,16.8270474 L26.5559737,21.0916309 C27.1251176,19.2269962 30.2036689,16.5657937 35.1164158,16.5657937 C41.2114299,16.5657937 46,20.4743549 46,28.8908241 L46,44 L46,44 Z M7.17920978,13.4281872 L7.11712135,13.4281872 C4.01269991,13.4281872 2,11.3509637 2,8.71793558 C2,6.03368124 4.07220132,4 7.23871119,4 C10.4026341,4 12.3480715,6.02855862 12.4101599,8.71025165 C12.4101599,11.3432798 10.4026341,13.4281872 7.17920978,13.4281872 L7.17920978,13.4281872 L7.17920978,13.4281872 Z M3.10983067,16.8270474 L11.6857949,16.8270474 L11.6857949,44 L3.10983067,44 L3.10983067,16.8270474 L3.10983067,16.8270474 Z"></path>
			</symbol>
			<symbol viewBox="0 0 48 48" id="codepen">
				<path d="M47.982,16.419 C47.9775,16.3875 47.97,16.359 47.9655,16.329 C47.955,16.2705 47.9445,16.212 47.9295,16.1565 C47.9205,16.122 47.907,16.089 47.8965,16.056 C47.88,16.005 47.8635,15.9555 47.844,15.906 C47.8305,15.8715 47.814,15.837 47.7975,15.8055 C47.7765,15.7575 47.754,15.7125 47.727,15.669 C47.709,15.636 47.688,15.6045 47.6685,15.573 C47.6415,15.5295 47.613,15.4875 47.5815,15.447 C47.559,15.417 47.535,15.387 47.511,15.3585 C47.478,15.3195 47.4435,15.282 47.4075,15.246 C47.3805,15.219 47.355,15.1905 47.3265,15.1665 C47.2875,15.132 47.2485,15.099 47.2095,15.0675 C47.178,15.0435 47.148,15.0195 47.1165,14.997 C47.1045,14.9895 47.094,14.979 47.082,14.9715 L25.1445,0.3465 C24.4515,-0.1155 23.55,-0.1155 22.8555,0.3465 L0.9195,14.9715 C0.9075,14.979 0.897,14.9895 0.885,14.997 C0.852,15.0195 0.822,15.0435 0.792,15.0675 C0.7515,15.099 0.7125,15.132 0.675,15.1665 C0.6465,15.1905 0.6195,15.219 0.5925,15.246 C0.5565,15.282 0.522,15.3195 0.4905,15.3585 C0.465,15.387 0.441,15.417 0.4185,15.447 C0.3885,15.4875 0.36,15.5295 0.333,15.573 C0.312,15.6045 0.2925,15.636 0.273,15.669 C0.2475,15.7125 0.225,15.7575 0.2025,15.8055 C0.1875,15.837 0.171,15.8715 0.1575,15.906 C0.1365,15.9555 0.12,16.005 0.1035,16.056 C0.093,16.089 0.081,16.122 0.072,16.1565 C0.057,16.212 0.0465,16.2705 0.036,16.329 C0.03,16.359 0.0225,16.3875 0.0195,16.419 C0.0075,16.506 0,16.596 0,16.6875 L0,31.3125 C0,31.4025 0.0075,31.4925 0.0195,31.5825 C0.0225,31.611 0.03,31.641 0.036,31.671 C0.0465,31.7295 0.057,31.7865 0.072,31.8435 C0.081,31.878 0.093,31.911 0.1035,31.944 C0.12,31.9935 0.1365,32.0445 0.1575,32.0955 C0.171,32.1285 0.1875,32.1615 0.2025,32.1945 C0.225,32.241 0.2475,32.286 0.273,32.3325 C0.2925,32.364 0.312,32.3955 0.333,32.427 C0.36,32.4705 0.3885,32.511 0.4185,32.5515 C0.441,32.583 0.465,32.613 0.4905,32.6415 C0.522,32.679 0.5565,32.718 0.5925,32.7525 C0.6195,32.781 0.6465,32.808 0.675,32.8335 C0.7125,32.868 0.7515,32.901 0.792,32.9325 C0.822,32.9565 0.852,32.9805 0.885,33.003 C0.897,33.0105 0.9075,33.021 0.9195,33.0285 L22.8555,47.6535 C23.202,47.8845 23.601,48 24,48 C24.399,48 24.798,47.8845 25.1445,47.6535 L47.082,33.0285 C47.094,33.021 47.1045,33.0105 47.1165,33.003 C47.148,32.9805 47.178,32.9565 47.2095,32.9325 C47.2485,32.901 47.2875,32.868 47.3265,32.8335 C47.355,32.808 47.3805,32.781 47.4075,32.7525 C47.4435,32.718 47.478,32.679 47.511,32.6415 C47.535,32.613 47.559,32.583 47.5815,32.5515 C47.613,32.511 47.6415,32.4705 47.6685,32.427 C47.688,32.3955 47.709,32.364 47.727,32.3325 C47.754,32.286 47.7765,32.241 47.7975,32.1945 C47.814,32.1615 47.8305,32.1285 47.844,32.0955 C47.8635,32.0445 47.88,31.9935 47.8965,31.944 C47.907,31.911 47.9205,31.878 47.9295,31.8435 C47.9445,31.7865 47.955,31.7295 47.9655,31.671 C47.97,31.641 47.9775,31.611 47.982,31.5825 C47.994,31.4925 48,31.4025 48,31.3125 L48,16.6875 C48,16.596 47.994,16.506 47.982,16.419 L47.982,16.419 L47.982,16.419 Z M26.0625,5.9175 L42.2235,16.6905 L35.0055,21.519 L26.0625,15.537 L26.0625,5.9175 L26.0625,5.9175 Z M21.9375,5.9175 L21.9375,15.537 L12.996,21.519 L5.7765,16.6905 L21.9375,5.9175 L21.9375,5.9175 Z M4.125,20.5485 L9.2865,24 L4.125,27.4515 L4.125,20.5485 L4.125,20.5485 Z M21.9375,42.0825 L5.7765,31.3095 L12.996,26.4825 L21.9375,32.463 L21.9375,42.0825 L21.9375,42.0825 Z M24,28.8795 L16.7055,24 L24,19.1205 L31.296,24 L24,28.8795 L24,28.8795 Z M26.0625,42.0825 L26.0625,32.463 L35.0055,26.4825 L42.2235,31.3095 L26.0625,42.0825 L26.0625,42.0825 Z M43.875,27.4515 L38.715,24 L43.875,20.5485 L43.875,27.4515 L43.875,27.4515 Z"></path>
			</symbol>
			<symbol viewBox="0 0 48 48" id="github">
				<path d="M23.9985,1 C10.746,1 0,11.7870921 0,25.096644 C0,35.7406712 6.876,44.7718301 16.4145,47.9584121 C17.6145,48.1797862 18.0525,47.4358488 18.0525,46.7973276 C18.0525,46.2250681 18.0315,44.7100863 18.0195,42.6996482 C11.343,44.1558981 9.9345,39.4693938 9.9345,39.4693938 C8.844,36.6864054 7.2705,35.9454799 7.2705,35.9454799 C5.091,34.4500754 7.4355,34.4801943 7.4355,34.4801943 C9.843,34.6503662 11.1105,36.9634994 11.1105,36.9634994 C13.2525,40.6455377 16.728,39.5823398 18.096,38.9649018 C18.3135,37.4077535 18.9345,36.3460615 19.62,35.7436831 C14.2905,35.1352808 8.688,33.0691228 8.688,23.8361671 C8.688,21.2052792 9.6225,19.0547881 11.1585,17.3696344 C10.911,16.7597262 10.0875,14.3110578 11.3925,10.9934585 C11.3925,10.9934585 13.4085,10.3459017 17.9925,13.4632101 C19.908,12.9285993 21.96,12.6620468 24.0015,12.6515052 C26.04,12.6620468 28.0935,12.9285993 30.0105,13.4632101 C34.5915,10.3459017 36.603,10.9934585 36.603,10.9934585 C37.9125,14.3110578 37.089,16.7597262 36.8415,17.3696344 C38.3805,19.0547881 39.309,21.2052792 39.309,23.8361671 C39.309,33.0917119 33.6975,35.1292571 28.3515,35.7256117 C29.2125,36.4695491 29.9805,37.9393525 29.9805,40.1877301 C29.9805,43.4089489 29.9505,46.0067059 29.9505,46.7973276 C29.9505,47.4418726 30.3825,48.1918338 31.6005,47.9554002 C41.13,44.7627944 48,35.7376593 48,25.096644 C48,11.7870921 37.254,1 23.9985,1"></path>
			</symbol>
			<symbol viewBox="0 0 48 48" id="shutterstock">
				<path d="M0,2.73934667 L0,45.2606533 C0,46.7735099 1.22636917,48 2.73934667,48 L45.2606533,48 C46.7735099,48 48,46.7736308 48,45.2606533 L48,2.73934667 C48,1.22636917 46.7735099,0 45.2606533,0 L2.73934667,0 C1.22636917,0 0,1.22636917 0,2.73934667 Z M22,13.3259816 L14.561262,13.3259816 C13.8141758,13.3259816 13.2065712,13.9452762 13.2065712,14.7067358 L13.2065712,22 L7,22 L7,14.7067358 C7,10.4573626 10.3921008,7 14.561262,7 L22,7 L22,13.3259816 L22,13.3259816 Z M41,33.2932642 C41,37.5426374 37.6078992,41 33.438738,41 L26,41 L26,34.6740184 L33.438738,34.6740184 C34.1858242,34.6740184 34.7934288,34.0547238 34.7934288,33.2932642 L34.7934288,26 L41,26 L41,33.2932642 L41,33.2932642 Z"></path>
			</symbol>
		</svg>
		<?= $page->title()->html() ?>
		<div>
			<p>Buttons</p>
			<button>label</button>
			<button class="error">error</button>
			<div class="error"><button>error in div</button></div>
			<button class="disabled">disabled</button>
			<div class="disabled"><button>disabled in div</button></div>
			<button disabled>disabled button</button>
			<p>Inputs</p>
			<form>
				<input type="email" placeholder="placeholder" />
			</form>
		</div>
	</body>
</html>
