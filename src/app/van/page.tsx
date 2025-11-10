"use client";

import { useState } from "react";

export default function VanPage() {
    const [count, setCount] = useState(0);

    return (
        <div className="min-h-screen flex items-center justify-center bg-gradient-to-br from-sky-50 via-white to-slate-100 p-6">
            <div className="w-full max-w-3xl bg-white/80 backdrop-blur-md rounded-2xl shadow-xl border border-slate-200 overflow-hidden">
                <div className="md:flex">
                    <div className="md:w-1/2 p-8 flex flex-col justify-center gap-4 bg-gradient-to-b from-white to-sky-50">
                        <h1 className="text-3xl md:text-4xl font-extrabold text-slate-800">
                            Irfana Branch
                        </h1>
                        <p className="text-sm text-slate-600">
                            A clean, responsive counter demo with accessible controls and a modern
                            card layout.
                        </p>
                        <div className="mt-4 inline-flex gap-2">
                            <span className="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-sky-100 text-sky-700 text-sm font-medium">
                                Van Location
                            </span>
                            <span className="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-100 text-emerald-700 text-sm font-medium">
                                Active
                            </span>
                        </div>
                    </div>

                    <div className="md:w-1/2 p-8 flex flex-col items-center justify-center gap-6">
                        <h2 className="text-lg font-semibold text-slate-700">Simple Counter</h2>

                        <div className="flex items-center gap-4">
                            <button
                                aria-label="decrement"
                                onClick={() => setCount((c) => Math.max(0, c - 1))}
                                className="h-12 w-12 flex items-center justify-center rounded-lg bg-white border border-slate-200 shadow-sm hover:bg-slate-50 active:scale-95 transition">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    className="h-5 w-5 text-slate-700"
                                    viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" />
                                </svg>
                            </button>

                            <div className="min-w-[120px] text-center">
                                <div className="text-3xl font-bold text-sky-600">{count}</div>
                                <div className="text-xs text-slate-500">current count</div>
                            </div>

                            <button
                                aria-label="increment"
                                onClick={() => setCount((c) => c + 1)}
                                className="h-12 w-12 flex items-center justify-center rounded-lg bg-sky-600 text-white shadow hover:bg-sky-700 active:scale-95 transition">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    className="h-5 w-5"
                                    viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" />
                                </svg>
                            </button>
                        </div>

                        <div className="flex gap-3 mt-2">
                            <button
                                onClick={() => setCount(0)}
                                className="px-4 py-2 text-sm rounded-lg bg-rose-100 text-rose-700 hover:bg-rose-200 transition">
                                Reset
                            </button>
                            <button
                                onClick={() => setCount((prev) => prev + 5)}
                                className="px-4 py-2 text-sm rounded-lg bg-emerald-100 text-emerald-700 hover:bg-emerald-200 transition">
                                +5
                            </button>
                        </div>
                    </div>
                </div>

                <div className="px-6 py-3 text-xs text-slate-500 text-center bg-white/60">
                    Built with Tailwind — responsive, accessible, and easy to customize.
                </div>
            </div>
        </div>
    );
}
