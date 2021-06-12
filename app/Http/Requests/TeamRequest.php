<?php

namespace App\Http\Requests;

use App\Models\Team;
use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $user = auth()->user();

        $id = $this->route()->parameter('team');
        if (!empty($id)) {

            $team = Team::findOrFail($id);
            //team
            foreach ($team->users as $userFE) {
                if ($userFE->id == $user->id) {
                    return true;
                }
            }
        } else {
            return true;
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
