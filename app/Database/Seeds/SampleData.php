<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SampleData extends Seeder
{
    public function run()
    {
        $data = [
            [
                "title" => "Fundraising for a Cause Close to Our Hearts",
                "slug" => "fundraising-for-a-cause-close-to-our-hearts",
                "excerpt" => "Together, we can make a difference. Learn how our small efforts can create big impact for the community we care about.",
                "author" => "Joanna & Grace",
                "content" => "Every act of kindness counts, no matter how small. For this fundraising initiative, Joanna and Grace have come together with one goal: to help those in need and bring hope to the community. Through teamwork, creativity, and generosity, we believe we can reach our goal and make a meaningful difference in the lives of others. Join us in this cause and be part of the change!",
                "is_published" => true,
                "published_at" => date("Y-m-d H:i:s"),
            ],
            [
                "title" => "Small Steps, Big Impact",
                "slug" => "small-steps-big-impact",
                "excerpt" => "Every donation, big or small, brings us closer to reaching our fundraising goal.",
                "author" => "Joanna",
                "content" => "Sometimes the smallest effort creates the biggest change. Whether it is sharing our campaign, donating, or volunteering, every contribution matters.",
                "is_published" => true,
                "published_at" => date("Y-m-d H:i:s", strtotime("-1 day")),
            ],
            [
                "title" => "Spreading Hope Through Unity",
                "slug" => "spreading-hope-through-unity",
                "excerpt" => "When people come together for a good cause, amazing things happen.",
                "author" => "Grace",
                "content" => "Unity is powerful. Working hand in hand, we can uplift the people around us and build a stronger, more caring community. Thank you for being part of our journey of hope!",
                "is_published" => true,
                "published_at" => date("Y-m-d H:i:s", strtotime("-2 days")),
            ],
        ];

        $this->db->table("posts")->insertBatch($data);
    }
}
