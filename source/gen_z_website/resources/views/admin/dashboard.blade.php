@extends('admin_layout')
@section('admin_content')
<!-- //market-->
<div class="market-updates">
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block" style="background-color: #e7ab3c;">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-usd"> </i>
					</div>
					 <div class="col-md-8 market-update-left">
					 <h4>Doanh thu</h4>
					<h3>1,350,000</h3>
					<p>VNĐ</p>
				  </div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block" style="background-color: #e7ab3c;">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-users" ></i>
					</div>
					<div class="col-md-8 market-update-left">
					<h4>Khách hàng</h4>
						<h3>120</h3>
						<p>Người</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd" >
				<div class="market-update-block" style="background-color: #e7ab3c;">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-eye"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>Truy cập</h4>
						<h3>560</h3>
						<p>Lượt</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd" >
				<div class="market-update-block" style="background-color: #e7ab3c;">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>Đơn hàng</h4>
						<h3>140</h3>
						<p>Đơn</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>	
		<!-- //market-->
		
		<div class="agileits-w3layouts-stats">
					<div class="col-md-4 stats-info widget">
						<div class="stats-info-agileits">
							<div class="stats-title">
								<h4 class="title">Chỉ tiêu</h4>
							</div>
							<div class="stats-body">
								<ul class="list-unstyled">
									<li>Tháng 1 <span class="pull-right">85%</span>  
										<div class="progress progress-striped active progress-right">
											<div class="bar green" style="width:85%;"></div> 
										</div>
									</li>
									<li>Tháng 2 <span class="pull-right">35%</span>  
										<div class="progress progress-striped active progress-right">
											<div class="bar yellow" style="width:35%;"></div>
										</div>
									</li>
									<li>Tháng 3 <span class="pull-right">78%</span>  
										<div class="progress progress-striped active progress-right">
											<div class="bar red" style="width:78%;"></div>
										</div>
									</li>
									<li>Tháng 4 <span class="pull-right">50%</span>  
										<div class="progress progress-striped active progress-right">
											<div class="bar blue" style="width:50%;"></div>
										</div>
									</li>
									<li>Tháng 5 <span class="pull-right">80%</span>  
										<div class="progress progress-striped active progress-right">
											<div class="bar light-blue" style="width:80%;"></div>
										</div>
									</li>
									<li class="last">Tháng 6 <span class="pull-right">60%</span>  
										<div class="progress progress-striped active progress-right">
											<div class="bar orange" style="width:60%;"></div>
										</div>
									</li> 
                                    
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-8 stats-info stats-last widget-shadow">
						<div class="stats-last-agile">
							<table class="table stats-table ">
								<thead>
									<tr>
										<th>STT</th>
										<th>SẢN PHẨM</th>
										<th>TRẠNG THÁI</th>
										<th>SỐ LƯỢNG BÁN RA</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">1</th>
										<td>Áo thun freesize</td>
										<td><span class="label label-success">Còn hàng</span></td>
										<td><h5>85% <i class="fa fa-level-up"></i></h5></td>
									</tr>
									<tr>
										<th scope="row">2</th>
										<td>Quần jeans đen</td>
										<td><span class="label label-warning">Mới về hàng</span></td>
										<td><h5>35% <i class="fa fa-level-up"></i></h5></td>
									</tr>
									<tr>
										<th scope="row">3</th>
										<td>Áo thun tay dài</td>
										<td><span class="label label-danger">Bán chậm</span></td>
										<td><h5 class="down">40% <i class="fa fa-level-down"></i></h5></td>
									</tr>
									<tr>
										<th scope="row">4</th>
										<td>Áo thun mẫu mới 2022</td>
										<td><span class="label label-info">Hết hàng</span></td>
										<td><h5>100% <i class="fa fa-level-up"></i></h5></td>
									</tr>
									<tr>
										<th scope="row">5</th>
										<td>Nón lưỡi trai</td>
										<td><span class="label label-success">Còn hàng</span></td>
										<td><h5 class="down">10% <i class="fa fa-level-down"></i></h5></td>
									</tr>
									<tr>
										<th scope="row">6</th>
										<td>Áo khoác da</td>
										<td><span class="label label-warning">Mới về hàng</span></td>
										<td><h5>38% <i class="fa fa-level-up"></i></h5></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>


@endsection