<!--Start Model Card Open-->
<div class="row" id="basic-table">
    <div class="col-12">
        <div class="card mb-0">
            <div class="table-responsive">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($processmeta as $key => $item)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td class="text-start">{{$item->meta_title}}</td>
                            <td>
                                <a href="{{asset('upload/process/process_meta/'.$item->meta_image) }}" data-fancybox="gallery_ $item->id " data-caption="item->title" class="gallary-item-overlay">
                                    <img height="35px" width="35px" src="{{asset('upload/process/process_meta/'.$item->meta_image) }}">
                                </a>
                            </td>
                            <td class="text-start">{{ $item->meta_description }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!--End Model Card Open-->