<div class="card card-body card_sidebar_one">
    <h3 class="text-center">{{ __('sections.reserve') }}</h3>
    <hr>
    <form action="">
      <div class="mt-3">
        <input type="text" name="" id="" placeholder="{{ __('sections.name') }}" class="form-control">
      </div>
      <div class="mt-3">
        <input type="email" name="" id="" placeholder="{{ __('sections.email') }}" class="form-control">
      </div>
      <div class="mt-3">
        <input type="tel" name="" id="" placeholder="{{ __('sections.phone') }}" class="form-control">
      </div>
      <div class="mt-3">
        <select name="" class="form-control" id="">
        <option value="">{{ __('sections.select services') }}</option>
        @if(isset($categories))
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">
                    {{ $category->name }}
                </option>
            @endforeach
        @endif
        </select>
      </div>
      <div class="mt-3">
      <select name="" class="form-control" id="">
          <option value="">{{ __('sections.select location') }}</option>
          <option value="0">{{ __('about.branch 1') }}</option>
          <option value="1">{{ __('about.branch 2') }}</option>
      </select>
      </div>

      <div class="mt-3">
        <textarea name="message" id="" cols="30" rows="5" placeholder="{{ __('sections.message') }}" class="form-control"></textarea>
      </div>
      <div class="mt-5">
        <button class="btn btn-dark">{{ __('sections.reserve') }}</button>
      </div>
    </form>
  </div>
