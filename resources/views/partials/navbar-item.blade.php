
<li class="nav-item me-3">
          <a class="nav-link active {{ request()->is($lien) ? 'border bg-light text-dark rounded-3':''}}" aria-current="page" href="{{ url($lien) }}">{{ $texte }}</a>
        </li>