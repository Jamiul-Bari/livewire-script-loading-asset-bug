{{-- Keeping @script @endscript empty gives error --}}
{{-- @script <script></script> @endscript gives error --}}
{{-- But <script>console.log(1);</script> DOES NOT give any error --}}
{{-- Simple usage like @script @filepondScripts @endscript will also give error --}}

@script
    @filepondScripts
    {{-- But if this is pasted in <head></head> of components.layouts.app or parent, it will work as expected --}}
@endscript

<div>
    Nothing in the world is as soft and yielding as water.

    <div>
        <x-filepond::upload wire:model="file" />
    </div>
</div>
