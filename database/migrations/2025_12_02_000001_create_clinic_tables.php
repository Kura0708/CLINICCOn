<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('role_name', 100);
        });

        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('service_name', 255);
            $table->time('duration');
        });

        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('last_name', 100);
            $table->string('first_name', 100);
            $table->string('mobile_number', 20)->unique();
            $table->string('middle_name', 100)->nullable();
            $table->string('nickname', 50)->nullable();
            $table->string('occupation', 100)->nullable();
            $table->date('birth_date')->nullable();
            $table->enum('gender', ['Male', 'Female', 'Other'])->nullable();
            $table->string('civil_status', 50)->nullable();
            $table->text('home_address')->nullable();
            $table->text('office_address')->nullable();
            $table->string('home_number', 20)->nullable();
            $table->string('office_number', 20)->nullable();
            $table->string('email_address', 100)->nullable();
            $table->string('referral', 255)->nullable();
            $table->string('emergency_contact_name', 255)->nullable();
            $table->string('emergency_contact_number', 20)->nullable();
            $table->string('relationship', 50)->nullable();
            $table->string('who_answering', 255)->nullable();
            $table->string('relationship_to_patient', 50)->nullable();
            $table->string('father_name', 255)->nullable();
            $table->string('father_number', 20)->nullable();
            $table->string('mother_name', 255)->nullable();
            $table->string('mother_number', 20)->nullable();
            $table->string('guardian_name', 255)->nullable();
            $table->string('guardian_number', 20)->nullable();
            $table->string('modified_by', 255);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });

        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->dateTime('appointment_date');
            $table->enum('status', ['Scheduled', 'Ongoing', 'Completed', 'Cancelled'])->default('Scheduled');
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('patient_id');
            $table->string('modified_by', 255);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
        });

        Schema::create('health_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id')->unique();
            $table->date('when_last_visit_q1')->nullable();
            $table->text('what_last_visit_reason_q1')->nullable();
            $table->text('what_seeing_dentist_reason_q2')->nullable();
            $table->boolean('is_clicking_jaw_q3a')->nullable();
            $table->boolean('is_pain_jaw_q3b')->nullable();
            $table->boolean('is_difficulty_opening_closing_q3c')->nullable();
            $table->boolean('is_locking_jaw_q3d')->nullable();
            $table->boolean('is_clench_grind_q4')->nullable();
            $table->boolean('is_bad_experience_q5')->nullable();
            $table->boolean('is_nervous_q6')->nullable();
            $table->text('what_nervous_concern_q6')->nullable();
            $table->boolean('is_condition_q1')->nullable();
            $table->text('what_condition_reason_q1')->nullable();
            $table->boolean('is_hospitalized_q2')->nullable();
            $table->text('what_hospitalized_reason_q2')->nullable();
            $table->boolean('is_serious_illness_operation_q3')->nullable();
            $table->text('what_serious_illness_operation_reason_q3')->nullable();
            $table->boolean('is_taking_medications_q4')->nullable();
            $table->text('what_medications_list_q4')->nullable();
            $table->boolean('is_allergic_medications_q5')->nullable();
            $table->text('what_allergies_list_q5')->nullable();
            $table->boolean('is_allergic_latex_rubber_metals_q6')->nullable();
            $table->boolean('is_pregnant_q7')->nullable();
            $table->boolean('is_breast_feeding_q8')->nullable();
            $table->string('modified_by', 255);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
        });

        Schema::create('patient_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('appointment_id');

            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->foreign('appointment_id')->references('id')->on('appointments')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('patient_records');
        Schema::dropIfExists('health_histories');
        Schema::dropIfExists('appointments');
        Schema::dropIfExists('patients');
        Schema::dropIfExists('services');
        Schema::dropIfExists('roles');
    }
};
