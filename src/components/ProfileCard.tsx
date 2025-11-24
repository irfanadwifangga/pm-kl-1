import React from "react";

type SocialLink = {
    name: string;
    url: string;
    icon?: React.ReactNode;
};

export interface ProfileCardProps {
    name: string;
    title?: string;
    avatarUrl?: string;
    bio?: string;
    location?: string;
    email?: string;
    phone?: string;
    socials?: SocialLink[];
    onMessage?: () => void;
    onFollow?: () => void;
    className?: string;
    style?: React.CSSProperties;
}

const styles: { [k: string]: React.CSSProperties } = {
    card: {
        display: "flex",
        gap: 16,
        alignItems: "flex-start",
        padding: 16,
        borderRadius: 12,
        boxShadow: "0 1px 3px rgba(0,0,0,0.08), 0 6px 20px rgba(0,0,0,0.06)",
        background: "#fff",
        maxWidth: 520,
        fontFamily: "Inter, Roboto, system-ui, -apple-system, 'Segoe UI', sans-serif"
    },
    avatar: {
        flex: "0 0 88px",
        width: 88,
        height: 88,
        borderRadius: 12,
        overflow: "hidden",
        background: "#eee",
        display: "flex",
        alignItems: "center",
        justifyContent: "center",
        fontSize: 28,
        color: "#555",
        textTransform: "uppercase"
    },
    content: {
        flex: 1,
        minWidth: 0
    },
    header: {
        display: "flex",
        justifyContent: "space-between",
        gap: 12,
        alignItems: "start"
    },
    nameBlock: {
        minWidth: 0
    },
    name: {
        margin: 0,
        fontSize: 18,
        fontWeight: 600,
        color: "#111827",
        overflow: "hidden",
        textOverflow: "ellipsis",
        whiteSpace: "nowrap"
    },
    title: {
        margin: "4px 0 0 0",
        fontSize: 13,
        color: "#6b7280"
    },
    actions: {
        display: "flex",
        gap: 8
    },
    btn: {
        padding: "8px 10px",
        borderRadius: 8,
        fontSize: 13,
        cursor: "pointer",
        border: "1px solid transparent",
        background: "#f3f4f6",
        color: "#111827"
    },
    btnPrimary: {
        background: "#111827",
        color: "#fff"
    },
    meta: {
        marginTop: 10,
        display: "flex",
        gap: 12,
        flexWrap: "wrap",
        fontSize: 13,
        color: "#374151"
    },
    bio: {
        marginTop: 10,
        fontSize: 14,
        color: "#374151",
        lineHeight: 1.35
    },
    socialList: {
        display: "flex",
        gap: 8,
        marginTop: 10,
        flexWrap: "wrap"
    },
    socialLink: {
        fontSize: 12,
        padding: "6px 8px",
        borderRadius: 8,
        background: "#f8fafc",
        color: "#111827",
        textDecoration: "none"
    }
};

function initials(name?: string) {
    if (!name) return "";
    const parts = name.trim().split(/\s+/).slice(0, 2);
    return parts.map((p) => p[0].toUpperCase()).join("");
}

export default function ProfileCard({
    name,
    title,
    avatarUrl,
    bio,
    location,
    email,
    phone,
    socials = [],
    onMessage,
    onFollow,
    className,
    style
}: ProfileCardProps) {
    return (
        <div style={{ ...styles.card, ...style }} className={className}>
            <div style={styles.avatar} aria-hidden={!avatarUrl}>
                {avatarUrl ? (
                    // eslint-disable-next-line jsx-a11y/img-redundant-alt
                    <img
                        src={avatarUrl}
                        alt={name ? `${name} avatar` : "avatar"}
                        style={{ width: "100%", height: "100%", objectFit: "cover" }}
                    />
                ) : (
                    <span>{initials(name)}</span>
                )}
            </div>

            <div style={styles.content}>
                <div style={styles.header}>
                    <div style={styles.nameBlock}>
                        <h3 style={styles.name} title={name}>
                            {name}
                        </h3>
                        {title && (
                            <div style={styles.title} title={title}>
                                {title}
                            </div>
                        )}
                    </div>

                    <div style={styles.actions}>
                        <button
                            type="button"
                            style={styles.btn}
                            onClick={onMessage}
                            aria-label={`Message ${name}`}>
                            Message
                        </button>
                        <button
                            type="button"
                            style={{ ...styles.btn, ...styles.btnPrimary }}
                            onClick={onFollow}
                            aria-pressed="false">
                            Follow
                        </button>
                    </div>
                </div>

                {bio && <div style={styles.bio}>{bio}</div>}

                <div style={styles.meta}>
                    {location && <div title={location}>📍 {location}</div>}
                    {email && (
                        <div title={email}>
                            ✉️{" "}
                            <a
                                href={`mailto:${email}`}
                                style={{ color: "inherit", textDecoration: "none" }}>
                                {email}
                            </a>
                        </div>
                    )}
                    {phone && (
                        <div title={phone}>
                            📞{" "}
                            <a
                                href={`tel:${phone}`}
                                style={{ color: "inherit", textDecoration: "none" }}>
                                {phone}
                            </a>
                        </div>
                    )}
                </div>

                {socials.length > 0 && (
                    <div style={styles.socialList} aria-label="social links">
                        {socials.map((s) => (
                            <a
                                key={s.url}
                                href={s.url}
                                target="_blank"
                                rel="noopener noreferrer"
                                style={styles.socialLink}
                                title={s.name}>
                                {s.icon ?? s.name}
                            </a>
                        ))}
                    </div>
                )}
            </div>
        </div>
    );
}
