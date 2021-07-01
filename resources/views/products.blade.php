@include('layouts.header')
	<div class="container mb-4">
		<div class="row">
			<div class="col-12">
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col"> </th>
								<th scope="col">Product</th>
								<th scope="col">Available</th>
								<th scope="col" class="text-right">Price</th>
								<th> </th>
							</tr>
						</thead>
						<tbody>
							@if(!empty($data) && $data->count())
								@foreach($data as $key => $value)
									<tr>
										<td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
										<td>{{ $value->name }}</td>
										<td>In stock</td>
										<td class="text-right">{{ number_format($value->price,2) }}</td>
										<td class="text-right"><a href="{{ url('/products', [$value->id]) }}" class="btn btn-sm btn-block btn-success text-uppercase nav-link">BuyNow</a></td>
									</tr>
							    @endforeach
							@else
								<tr><td colspan="4">There are no data.</td></tr>
							@endif					
						</tbody>
					</table>
					{!! $data->links("pagination::bootstrap-4") !!}
				</div>
			</div>
			
		</div>
	</div>
@include('layouts.footer')
