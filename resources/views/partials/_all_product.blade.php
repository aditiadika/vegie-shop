<div class="product__discount">
    <div class="section-title product__discount__title">
        <h2>Sale Off</h2>
    </div>
    <div class="row">
        <div class="product__discount__slider owl-carousel">
            @foreach($sales as $sale)
                <div class="col-lg-4">
                    <div class="product__discount__item">
                        <div class="product__discount__item__pic set-bg"
                             data-setbg="img/product/discount/pd-4.jpg">
                            <div class="product__discount__percent">{{ $sale->getDiscount() }}</div>
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__discount__item__text">
                            <span>{{ optional($sale->category)->name }}</span>
                            <h5>
                                <a href="{{ route('shops.show', $sale->slug) }}">{{ $sale->name }}</a>
                            </h5>
                            <div class="product__item__price">{{ $sale->getPrice() }}
                                <span>{{ $sale->getPriceBeforeDiscount() }}</span></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<div class="filter__item">
    <div class="row">
        <div class="col-lg-4 col-md-5">
            <div class="filter__sort">
                <span>Sort By</span>
                <select>
                    <option value="0">Default</option>
                    <option value="0">Default</option>
                </select>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="filter__found">
                <h6><span>{{ count(\App\Models\Product::all()) }}</span> Products found</h6>
            </div>
        </div>
        <div class="col-lg-4 col-md-3">
            <div class="filter__option">
                <span class="icon_grid-2x2"></span>
                <span class="icon_ul"></span>
            </div>
        </div>
    </div>
</div>
<div class="row">
    @foreach($products as $product)
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="img/product/product-1.jpg">
                    <ul class="product__item__pic__hover">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
                <div class="product__item__text">
                    <h6><a href="{{ route('shops.show', $product->slug) }}">{{ $product->name }}</a>
                    </h6>
                    <h5>{{ $product->getPrice() }}</h5>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div>
    {!! $products->render() !!}
</div>
