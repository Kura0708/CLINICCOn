<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestoreClinicDataSeeder extends Seeder
{
    public function run(): void
    {
        // Insert Roles (only if not exist)
        if (DB::table('roles')->count() == 0) {
            DB::table('roles')->insert([
                ['id' => 1, 'role_name' => 'admin'],
                ['id' => 2, 'role_name' => 'staff'],
                ['id' => 3, 'role_name' => 'user'],
            ]);
        }

        // Insert Services (only if not exist)
        if (DB::table('services')->count() == 0) {
            DB::table('services')->insert([
                ['id' => 1, 'service_name' => 'Cleaning', 'duration' => '01:00:00'],
                ['id' => 2, 'service_name' => 'Tooth extractions', 'duration' => '01:00:00'],
                ['id' => 3, 'service_name' => 'Full Consultation', 'duration' => '01:30:00'],
            ]);
        }

        // Insert Users from old database
        DB::table('users')->insert([
            ['user_id' => 2, 'username' => 'sample', 'contact' => null, 'password' => '$2y$12$akTZjdjVv618a8QdvipFrO6NqNrlOnd2/RfuAPbV./tnT/gSfwsx2', 'role' => 1],
            ['user_id' => 3, 'username' => 'dave', 'contact' => '09770157872', 'password' => '$2y$12$xb5v.Q4hr55e6AtzQdq1jugRACIFTaJlszP7quOlZCyc43xN1ryNq', 'role' => 1],
            ['user_id' => 4, 'username' => 'ace', 'contact' => '09134567811', 'password' => '$2y$12$xhkAlOt8zUYtchbkt54Ay.ZWthwq6Xy8/u/ayfDNvO1bT7LDAr7NO', 'role' => 2],
            ['user_id' => 6, 'username' => 'galor', 'contact' => '09134567811', 'password' => '$2y$12$HCjPadL1qtjVnPV0Yt0aturcFjycaU.ym6/jLa9tuqsAq05RE5Ovy', 'role' => 2],
        ]);

        // Insert Patients
        foreach ([
            ['id' => 1, 'last_name' => 'SAMPLE', 'first_name' => 'SAMPLE', 'mobile_number' => '09979775797', 'middle_name' => 'SAMPLE', 'modified_by' => 'SYSTEM'],
            ['id' => 3, 'last_name' => 'S', 'first_name' => 'S', 'mobile_number' => '099797757', 'middle_name' => 'S', 'modified_by' => 'SYSTEM'],
            ['id' => 6, 'last_name' => 'A', 'first_name' => 'A', 'mobile_number' => '1', 'middle_name' => 'A', 'modified_by' => 'SYSTEM'],
            ['id' => 7, 'last_name' => 'RE', 'first_name' => 'RE', 'mobile_number' => '32', 'middle_name' => 'RE', 'modified_by' => 'SYSTEM'],
            ['id' => 10, 'last_name' => 'E', 'first_name' => 'E', 'mobile_number' => '2', 'middle_name' => 'E', 'modified_by' => 'SYSTEM'],
            ['id' => 11, 'last_name' => 'R', 'first_name' => 'R', 'mobile_number' => '23', 'middle_name' => 'R', 'modified_by' => 'SYSTEM'],
            ['id' => 17, 'last_name' => 'Q', 'first_name' => 'Q', 'mobile_number' => '123', 'middle_name' => 'Q', 'modified_by' => 'SYSTEM'],
            ['id' => 20, 'last_name' => 'a', 'first_name' => 'a', 'mobile_number' => '64', 'middle_name' => 'a', 'modified_by' => 'SYSTEM'],
            ['id' => 21, 'last_name' => 'u', 'first_name' => 'u', 'mobile_number' => '45', 'middle_name' => 'u', 'modified_by' => 'SYSTEM'],
            ['id' => 22, 'last_name' => 'N', 'first_name' => 'N', 'mobile_number' => '23411', 'middle_name' => 'N', 'modified_by' => 'SYSTEM'],
            ['id' => 23, 'last_name' => 'khj', 'first_name' => 'hjk', 'mobile_number' => '534', 'middle_name' => 'hjk', 'modified_by' => 'SYSTEM'],
            ['id' => 24, 'last_name' => 'ROSALES', 'first_name' => 'RENZ', 'mobile_number' => '67', 'middle_name' => 'SALUMBIDES', 'home_address' => '2107 Rosal Street, Batasan Hills Quezon City', 'modified_by' => 'SYSTEM'],
            ['id' => 25, 'last_name' => 'ROSALES', 'first_name' => 'CLARENZ LUIGI', 'mobile_number' => '092259951316', 'middle_name' => 'SALUMBIDES', 'birth_date' => '2003-04-29', 'modified_by' => 'SYSTEM'],
            ['id' => 26, 'last_name' => 'LAARA', 'first_name' => 'LAARA', 'mobile_number' => '543333434', 'middle_name' => 'LAARA', 'birth_date' => '2025-11-17', 'modified_by' => 'SYSTEM'],
            ['id' => 27, 'last_name' => 'ROSALES', 'first_name' => 'LUIS', 'mobile_number' => '0951316', 'occupation' => 'ELECTRICIAN', 'birth_date' => '2003-04-29', 'gender' => 'Male', 'civil_status' => 'SINGLE', 'home_address' => '2107 ROSAL STREET', 'emergency_contact_name' => 'LAARA ROSALES', 'emergency_contact_number' => '0997', 'relationship' => 'DAUGHTER', 'modified_by' => 'SYSTEM'],
        ] as $patient) {
            DB::table('patients')->insert($patient);
        }

        // Insert Appointments
        DB::table('appointments')->insert([
            ['id' => 1, 'appointment_date' => '2025-11-10 09:00:00', 'status' => 'Scheduled', 'service_id' => 1, 'patient_id' => 1, 'modified_by' => 'SYSTEM'],
            ['id' => 2, 'appointment_date' => '2025-11-10 10:30:00', 'status' => 'Scheduled', 'service_id' => 2, 'patient_id' => 3, 'modified_by' => 'SYSTEM'],
            ['id' => 3, 'appointment_date' => '2025-11-10 11:30:00', 'status' => 'Scheduled', 'service_id' => 2, 'patient_id' => 6, 'modified_by' => 'SYSTEM'],
            ['id' => 4, 'appointment_date' => '2025-11-10 13:30:00', 'status' => 'Scheduled', 'service_id' => 1, 'patient_id' => 7, 'modified_by' => 'SYSTEM'],
            ['id' => 5, 'appointment_date' => '2025-11-10 14:30:00', 'status' => 'Scheduled', 'service_id' => 1, 'patient_id' => 10, 'modified_by' => 'SYSTEM'],
            ['id' => 6, 'appointment_date' => '2025-11-10 15:30:00', 'status' => 'Cancelled', 'service_id' => 1, 'patient_id' => 11, 'modified_by' => 'SYSTEM'],
            ['id' => 7, 'appointment_date' => '2025-11-11 09:30:00', 'status' => 'Scheduled', 'service_id' => 1, 'patient_id' => 17, 'modified_by' => 'SYSTEM'],
            ['id' => 8, 'appointment_date' => '2025-11-11 10:30:00', 'status' => 'Scheduled', 'service_id' => 1, 'patient_id' => 20, 'modified_by' => 'SYSTEM'],
            ['id' => 9, 'appointment_date' => '2025-11-12 09:30:00', 'status' => 'Scheduled', 'service_id' => 2, 'patient_id' => 11, 'modified_by' => 'SYSTEM'],
            ['id' => 10, 'appointment_date' => '2025-11-10 10:00:00', 'status' => 'Cancelled', 'service_id' => 1, 'patient_id' => 21, 'modified_by' => 'SYSTEM'],
            ['id' => 11, 'appointment_date' => '2025-11-11 12:30:00', 'status' => 'Scheduled', 'service_id' => 3, 'patient_id' => 11, 'modified_by' => 'SYSTEM'],
            ['id' => 12, 'appointment_date' => '2025-11-10 12:30:00', 'status' => 'Scheduled', 'service_id' => 1, 'patient_id' => 22, 'modified_by' => 'SYSTEM'],
            ['id' => 13, 'appointment_date' => '2025-11-12 10:30:00', 'status' => 'Scheduled', 'service_id' => 1, 'patient_id' => 23, 'modified_by' => 'SYSTEM'],
            ['id' => 14, 'appointment_date' => '2025-11-17 09:00:00', 'status' => 'Completed', 'service_id' => 3, 'patient_id' => 7, 'modified_by' => 'SYSTEM'],
            ['id' => 15, 'appointment_date' => '2025-11-17 10:30:00', 'status' => 'Cancelled', 'service_id' => 2, 'patient_id' => 24, 'modified_by' => 'SYSTEM'],
            ['id' => 16, 'appointment_date' => '2025-11-18 09:00:00', 'status' => 'Ongoing', 'service_id' => 3, 'patient_id' => 25, 'modified_by' => 'SYSTEM'],
            ['id' => 17, 'appointment_date' => '2025-11-17 12:00:00', 'status' => 'Ongoing', 'service_id' => 3, 'patient_id' => 26, 'modified_by' => 'SYSTEM'],
            ['id' => 55, 'appointment_date' => '2025-11-18 16:49:12', 'status' => 'Completed', 'service_id' => 1, 'patient_id' => 7, 'modified_by' => ''],
            ['id' => 115, 'appointment_date' => '2025-11-18 16:49:12', 'status' => 'Completed', 'service_id' => 1, 'patient_id' => 7, 'modified_by' => ''],
        ]);

        // Insert Health Histories
        DB::table('health_histories')->insert([
            [
                'id' => 1,
                'patient_id' => 27,
                'what_last_visit_reason_q1' => 'Toothache',
                'what_seeing_dentist_reason_q2' => 'Toothache',
                'modified_by' => 'SYSTEM',
            ],
        ]);

        // Insert Notes
        DB::table('notes')->insert([
            [
                'id' => 1,
                'title' => 'Meeting',
                'content' => 'Meeting with client',
                'user_id' => 2,
            ],
        ]);

        echo "✓ All clinic data restored successfully!\n";
    }
}
