<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $last_name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string $cedula
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCedula($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\ResearchLine
 *
 * @property int $id
 * @property int|null $parent_id
 * @property int $school_id
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\ResearchLine[] $children
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\ResearchLine[] $descendants
 * @property-read \App\ResearchLine|null $parent
 * @property-read \App\School $school
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ResearchLine newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ResearchLine newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ResearchLine query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ResearchLine whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ResearchLine whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ResearchLine whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ResearchLine whereSchoolId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ResearchLine whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ResearchLine whereUpdatedAt($value)
 */
	class ResearchLine extends \Eloquent {}
}

namespace App{
/**
 * App\Mentor
 *
 * @property int $id
 * @property string $name
 * @property string $last_name
 * @property string|null $cedula
 * @property string|null $email
 * @property string|null $phone
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $full_name
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Mentor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Mentor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Mentor query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Mentor whereCedula($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Mentor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Mentor whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Mentor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Mentor whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Mentor whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Mentor wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Mentor whereUpdatedAt($value)
 */
	class Mentor extends \Eloquent {}
}

namespace App{
/**
 * App\School
 *
 * @property int $id
 * @property string $title
 * @property string|null $code
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\School newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\School newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\School query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\School whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\School whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\School whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\School whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\School whereUpdatedAt($value)
 */
	class School extends \Eloquent {}
}

namespace App{
/**
 * App\Publication
 *
 * @property int $id
 * @property int $mentor_id
 * @property int $research_line_id
 * @property string $title
 * @property string $author
 * @property string $resume
 * @property int $publish_year
 * @property string $url
 * @property string $mention
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Mentor $mentor
 * @property-read \App\ResearchLine $researchLine
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Publication newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Publication newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Publication query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Publication whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Publication whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Publication whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Publication whereMention($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Publication whereMentorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Publication wherePublishYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Publication whereResearchLineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Publication whereResume($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Publication whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Publication whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Publication whereUrl($value)
 */
	class Publication extends \Eloquent {}
}

