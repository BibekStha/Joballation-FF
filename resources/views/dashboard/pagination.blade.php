<?php

?>


<span class="pagination float-right pt-3">
  @if($paginator->currentPage() <= 1)
    <i class="fas fa-caret-left disabled"></i>
  @else
  <a href="{{ $paginator->url($paginator->currentPage()-1) }}">
    <i class="fas fa-caret-left"></i>
  </a>
  @endif
  <span id="current-page-number">{{ $paginator->currentPage() }}</span>
    out of 
  <span id="total-page-number"> {{ $paginator->lastPage() }}</span>
  @if($paginator->currentPage() >= $paginator->lastPage())
    <i class="fas fa-caret-right disabled"></i>
  @else
    <a href="{{ $paginator->url($paginator->currentPage()+1) }}">
      <i class="fas fa-caret-right"></i>
    </a>
  @endif
</span>
