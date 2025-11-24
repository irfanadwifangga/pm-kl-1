import React from "react";

const ProfilePage: React.FC = () => {
    return (
        <div className="min-h-screen bg-gray-100 flex items-center justify-center p-6">
            <div className="bg-white rounded-lg shadow-lg p-8 max-w-md w-full">
                <div className="flex flex-col items-center">
                    <h1 className="text-2xl font-semibold mb-2">John Doe</h1>
                    <p className="text-gray-600 mb-4">Full Stack Developer</p>
                    <div className="text-center">
                        <p className="text-gray-700 mb-2">
                            Passionate developer with experience in building modern web applications
                            using React, Next.js, and Tailwind CSS.
                        </p>
                        <p className="text-gray-700">
                            Loves to learn new technologies and contribute to open source projects.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default ProfilePage;
