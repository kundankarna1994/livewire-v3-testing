<div class=" mx-auto  w-2/4 mt-20">
    <form wire:submit="submit">
         <div class="flex flex-col my-4">
            <label>Thumbnail</label>
    <input type="file" wire:model="form.image">
 
    @error('form.image') <span class="error text-red-500">{{ $message }}</span> @enderror
</div>
    <label>Title</label>
    <input type="text" wire:model.blur="form.title" placeholder="Type here" class="input input-bordered w-full" />
    <div>
        @error('form.title') <span class="error text-red-500">{{ $message }}</span> @enderror 
    </div>

    <label>Slug</label>
    <input type="text" wire:model="form.slug" placeholder="Type here" class="input input-bordered w-full" />
    <div>
        @error('form.slug') <span class="error text-red-500">{{ $message }}</span> @enderror 
    </div>

    <div class="flex flex-col mt-4">
        <label class="">Content</label>
        <textarea class="textarea" wire:model="form.content" placeholder="Bio"></textarea>
        <div>
            @error('form.content') <span class="error text-red-500">{{ $message }}</span> @enderror 
        </div>
    </div>
    <button class="px-3 py-2 bg-blue-600 rounded text-white mt-10">Update</button>
    </form>
</div>
