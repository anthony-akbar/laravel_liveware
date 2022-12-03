<?php

namespace App\Http\Livewire\Course;

use App\Models\Course;
use Livewire\Component;

class Edit extends Component
{
    public Course $course;

    public function mount(Course $course)
    {
        $this->course = $course;
    }

    public function render()
    {
        return view('livewire.course.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->course->save();

        return redirect()->route('admin.courses.index');
    }

    protected function rules(): array
    {
        return [
            'course.name' => [
                'string',
                'required',
            ],
            'course.course_title' => [
                'string',
                'required',
            ],
            'course.course_desc' => [
                'string',
                'nullable',
            ],
        ];
    }
}
