@if ($paginator->hasPages())
    <ul class="pagination justify-content-center">
       
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><span>← Previous</span></li>
        @else
        
            <li class="page-item"><a class="page-link page-link--with-arrow" href="{{ $paginator->previousPageUrl() }}" >← Previous</a></li>
        @endif


      
        @foreach ($elements as $element)
           
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif


           
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active page-item my-active"><span>{{ $page }}</span></li>
                    @else
                        <li class="page-item"><a class="page-link page-link--with-arrow" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach


        
        @if ($paginator->hasMorePages())
            <li class="page-item"><a class="page-link page-link--with-arrow" href="{{ $paginator->nextPageUrl() }}" >Next →</a></li>
        @else
            <li class="page-item disabled"><span>Next →</span></li>
        @endif
    </ul>
@endif 