<div>
    <div class="col-lg-12">
        <div class="card card-transparent file-list recent-files">
            <div class="card-body">
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-lg-6 col-xl-3 mb-5">
                            <div class="card file photo">
                                <div class="file-options dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                       aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ route('product.edit', $product->id) }}">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                        <a class="dropdown-item" href="#">View Details</a>
                                    </div>
                                </div>
                                <div class="card-header file-icon">
                                    <i class="material-icons">photo</i>
                                </div>
                                <div class="card-body file-info">
                                    <p>{{ $product->name }}</p>
                                    @if ($product->is_sale == true) <div class="product__details__price">{{ $product->getPrice() }} <span style="text-decoration: line-through;">{{ $product->getPriceBeforeDiscount() }}</span></div> @else <div class="product__details__price">{{ $product->getPrice() }}</div> @endif
                                    <span class="file-date">Created at: {{ $product->created_at->diffForHumans() }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $products->links() }}
            </div>
        </div>
    </div>
</div>
